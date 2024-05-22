<?php
class Plante_medicinale{
    private $id;
    private $nom_local;
    private $nom_scientifique;
    private $description;
    private $propriete;
    private $images = array();
    private $id_famille;

    public function getId(){
        return $this->id;
    }
    public function getNom_local(){
        return $this->nom_local;
    }
    public function getNom_scientifique(){
        return $this->nom_scientifique;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getPropriete(){
        return $this->propriete;
    }
    public function getImages(){
        return $this->images;
    }
    public function getId_famille(){
        return $this->id;
    }

    public function setId($n_id){
        $this->id = $n_id;
    }
    public function setNom_local($n_local){
        $this->nom_local = $n_local;
    }
    public function setNom_scientifique($n_sc){
        $this->nom_scientifique = $n_sc;
    }
    public function setDescription($n_d){
        $this->description = $n_d;
    }
    public function setPropriete($n_p){
        $this->propriete = $n_p;
    }
    public function setImages($n_imgs){
        $this->images = $n_imgs;
    }
    public function setId_famille($n_id_f){
        $this->id_famille = $n_id_f;
    }

}
?>