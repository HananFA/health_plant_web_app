<?php
require('../Models/PDOClass.php');
require('../Models/Plante_medicinale.php');
require('../Models/Famille_de_plante.php');
require('../Models/Source.php');

$new_pdo = new PDOClass();


if(isset($_GET['nom'])){
    $nom = $_GET['nom'];
    $requete = "select * 
    from plante_medicinale inner join famille_de_plante on (plante_medicinale.id_famille = famille_de_plante.id_famille)
    where nom_scientifique = ?;";
    $result = $new_pdo->prepared_request($requete);
    $result->bindParam(1, $nom, PDO::PARAM_STR);
    $result->execute();

    $plante = new Plante_medicinale();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $plante->setId($row['id_plante']);
        $plante->setNom_local($row['nom_local']);
        $plante->setNom_scientifique($row['nom_scientifique']);
        $plante->setDescription($row['description']);
        $plante->setPropriete($row['propriete']);
        $plante->setLocation($row['location']);
        $nom_famille = $row['nom'];
    }

    $images = array();
    $id_plnt = $plante->getId();
    $requete2 = "select path_image from images_plantes where id_plante = ?;";
    $result2 = $new_pdo->prepared_request($requete2);
    $result2->bindParam(1, $id_plnt, PDO::PARAM_INT);
    $result2->execute();

    foreach($result2 as $row){
        $images[] = $row['path_image'];
    }

    $plante->setImages($images);

    $traitements = array();
    $requete3 = "select nom_traitement 
    from traitement inner join traitement_contient_plante 
    on (traitement.id_traitement = traitement_contient_plante.id_traitement)
    where id_plante = ?;";
    $result3 = $new_pdo->prepared_request($requete3);
    $result3->bindParam(1, $id_plnt, PDO::PARAM_INT);
    $result3->execute();

    foreach($result3 as $row){
        $traitements[] = $row['nom_traitement'];
    }

    $sources = array();
    $requete4 = "select titre, lien from source inner join relation_plante_source
    on (source.id_source = relation_plante_source.id_source)
    where id_plante = ?;";
    $result4 = $new_pdo->prepared_request($requete4);
    $result4->bindParam(1, $id_plnt, PDO::PARAM_INT);
    $result4->execute();

    foreach($result4 as $row){
        $new_source = new Source();
        $new_source->setTitre($row['titre']);
        $new_source->setLien($row['lien']);
        $sources[] = $new_source;
    }
}
?>