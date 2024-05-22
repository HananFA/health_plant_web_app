<?php
require('../Models/PDOClass.php');
require('../Models/Plante_medicinale.php');
require('../Models/Famille_de_plante.php');

$new_pdo = new PDOClass();

$plantes = array();//pour stockers les plantes 
$familles = array();//pour stocker les familles

$ids_array = array();//pour stocker les ids recuperer dès la base de données

$requete1 = "select id_plante from plante_medicinale";
$result1 = $new_pdo->prepared_request($requete1);
$result1->execute();

while ($row = $result1->fetch(PDO::FETCH_ASSOC)) {
    $ids_array[] = $row['id_plante'];
}

$min = 0;
$max = count($ids_array);
$table_index = array();
while(count($table_index)<6)
{
    $index = rand($min, $max-1);
    if(!in_array($index, $table_index)){
        $table_index[] = $index;
    }

}
//ceci pour recuperer des données tels que id nom famille
$requete2 = "select plante_medicinale.id_plante, plante_medicinale.nom_scientifique, plante_medicinale.nom_local, 
plante_medicinale.description, famille_de_plante.id_famille, famille_de_plante.nom
from plante_medicinale inner join famille_de_plante on (plante_medicinale.id_famille = famille_de_plante.id_famille)
where plante_medicinale.id_plante in(?, ?, ?, ?, ?, ?) ;";
$result2 = $new_pdo->prepared_request($requete2);
$result2->bindParam(1, $ids_array[$table_index[0]],PDO::PARAM_INT);
$result2->bindParam(2, $ids_array[$table_index[1]],PDO::PARAM_INT);
$result2->bindParam(3, $ids_array[$table_index[2]],PDO::PARAM_INT);
$result2->bindParam(4, $ids_array[$table_index[3]],PDO::PARAM_INT);
$result2->bindParam(5, $ids_array[$table_index[4]],PDO::PARAM_INT);
$result2->bindParam(6, $ids_array[$table_index[5]],PDO::PARAM_INT);
$result2->execute();
$result2 = $result2->fetchAll();
foreach($result2 as $row)
{
    $plante = new Plante_medicinale();
    $plante->setId($row['id_plante']);
    $plante->setNom_local($row['nom_local']);
    $plante->setNom_scientifique($row['nom_scientifique']);
    $plante->setDescription($row['description']);
    $plantes[] = $plante;
    $famille = new Famille_de_plante();
    $famille->setId($row['id_famille']);
    $famille->setNom($row['nom']);
    $familles[] = $famille;
}

//ceci pour recuperer les photos
$images = array();
foreach($plantes as $plante){
    $requete3 = "select path_image from images_plantes where id_plante=? LIMIT 1;";
    $result3 = $new_pdo->prepared_request($requete3);
    $result3->bindParam(1, $plante->getId(),PDO::PARAM_INT);
    $result3->execute();
    $result3 = $result3->fetchAll();
    if($result3->num_rows > 0 ){
        $row = $result3->FETCH_ASSOC();
        $path = $row['path_image'];
        $images[] = $path;
    }
}

?>