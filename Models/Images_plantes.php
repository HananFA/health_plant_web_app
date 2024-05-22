<?php

class Images_plante{
    private $id;
    private $pathImage;
    private $idPlante;

    public function getId(){
        return $this->id;
    }

    public function getPathImage(){
        return $this->pathImage;
    }

    public function getIdPlante(){
        return $this->idPlante;
    }

    public function setId($new_id){
        $this->id = $new_id;
    }
    
    public function setPathImage($new_path){
        $this->pathImage = $new_path;
    }

    public function setIdPlante($new_id_plante){
        $this->idPlante = $new_id_plante;
    }
}
?>