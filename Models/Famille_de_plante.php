<?php
class Famille_de_plante{
    private $id;
    private $nom;

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }

    public function setId($n_id){
        $this->id = $n_id;
    }
    public function setNom($n_nom){
        $this->nom = $n_nom;
    }
}
?>