<?php
require_once('Message_signal.php');
class Visiteur{

    public function sign_up(){
        echo '';
    }

    public function chercher_une_plante(){
        echo '';
    }

    public function chercher_un_traitement(){
        echo '';
    }
    
    public function envoyer_message_ou_signal($email,$sujet,$contenu){
        $message = new Message_signal();
        $message->setEmail_envoyant($email);
        $message->setContenu($contenu);
        $message->setSujet($sujet);

        return $message;
    }
    
}
?>