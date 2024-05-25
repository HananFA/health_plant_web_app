<?php
require('../Models/PDOClass.php');
require('../Models/Plante_medicinale.php');

$new_pdo = new PDOClass();

$requete = "SELECT p.id_plante, p.nom_scientifique, p.nom_local, i.path_image
FROM plante_medicinale p
LEFT JOIN images_plantes i ON p.id_plante = i.id_plante
WHERE i.id_image = (
    SELECT id_image
    FROM images_plantes
    WHERE id_plante = p.id_plante
    LIMIT 1
);";

$result = $new_pdo->prepared_request($requete);
$result->execute();

$plantes = array();

foreach($result as $row){
    $plante = new Plante_medicinale();
    $plante->setId($row['id_plante']);
    $plante->setNom_scientifique($row['nom_scientifique']);
    $plante->setNom_local($row['nom_local']);
    $images = array();
    $image = $row['path_image'];
    $images[]= $image;
    $plante->setImages($images);
    $plantes[]=$plante;
}
?>