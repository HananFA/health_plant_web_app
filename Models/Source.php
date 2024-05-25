<?php
class Source{
    private $id;
    private $titre;
    private $lien;

    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getLien(){
        return $this->lien;
    }
    public function setId($idd){
        $this->id = $idd;
    }
    public function setTitre($titree){
        $this->titre = $titree;
    }
    public function setLien($lienn){
        $this->lien = $lienn;
    }
}
?>