<?php
require('Visiteur.php');
class User extends Visiteur{
    private $id ;
    private $username;
    private $email;
    private $password;
    private $photo_profile;

    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getPhoto_profile(){
        return $this->photo_profile;
    }

    public function setId($n_id){
        $this->id = $n_id;
    }
    public function setUsername($n_username){
        $this->username = $n_username;
    }
    public function setEmail($n_email){
        $this->email = $n_email;
    }
    public function setPassword($n_pass){
        $this->password = $n_pass;
    }
    public function setPhoto_profile($n_profile){
        $this->photo_profile = $n_profile;
    }
    public function login($user, $pass){
        $this->setUsername($user);
        $this->setPassword($pass);
    }
    public function modif_username(){

    }
    public function modif_photo_profile(){

    }
    public function supp_photo(){

    }
    public function ajout_plante_au_favoris(){

    }
    public function supp_plante_au_favoris(){

    }

    public function ajout_commentaire(){

    }

    public function modif_commentaire(){

    }

    public function supp_commentaire(){

    }

    public function ajout_offre_de_vente(){

    }

    public function modif_offre_de_vente(){

    }
    
    public function supp_offre_de_vente(){

    }
    public function logout(){

    }

}
?>