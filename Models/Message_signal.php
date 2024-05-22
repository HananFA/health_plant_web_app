<?php
class Message_signal{
    private $id;
    private $sujet;
    private $contenu;
    private $email_envoyant;

    public function getSujet(){
        return $this->sujet;
    }
    public function getContenu(){
        return $this->contenu;
    }
    public function getEmail_envoyant(){
        return $this->email_envoyant;
    }

    public function setSujet($n_sujet){
        $this->sujet = $n_sujet;
    }
    public function setContenu($n_contenu){
        $this->contenu = $n_contenu;
    }
    public function setEmail_envoyant($n_email){
        $this->email_envoyant = $n_email;
    }
}
?>