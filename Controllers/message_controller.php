<?php
require('../Models/PDOClass.php');
require('../Models/Message_signal.php');
require('../Models/Visiteur.php');
$new_pdo = new PDOClass();
$new_visiteur= new Visiteur();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['contenu'])){
        $new_message = $new_visiteur->envoyer_message_ou_signal($_POST['email'],$_POST['sujet'],$_POST['contenu']);
        
        $sujet = $new_message->getSujet() ;
        $contenu = $new_message->getContenu();
        $email = $new_message->getEmail_envoyant() ;

        $requete = "insert into message_signal(sujet,contenu,email_envoyant) values(?,?,?);";
        $result = $new_pdo->prepared_request($requete);
        $result->bindParam(1, $sujet,PDO::PARAM_STR);
        $result->bindParam(2,  $contenu,PDO::PARAM_STR);
        $result->bindParam(3, $email,PDO::PARAM_STR);
        if($result->execute()){
            $message = "Message envoyé avec succès";
        }else{
            $message = "Echec d'envoie de message";
        }
        session_start();
        $_SESSION['message'] = $message;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

?>