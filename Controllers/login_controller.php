<?php
require('../Models/PDOClass.php');
require('../Models/User.php');
if(isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $new_user = new User();
    $new_user->login($user,$pass);

    $new_pdo = new PDOClass();
    $requete = "select * from utilisateurs where username = ? and password= ?;";
    $result = $new_pdo->prepared_request($requete);
    $result->bindParam(1, $user,PDO::PARAM_STR);
    $result->bindParam(2, $pass,PDO::PARAM_STR);
    $result->execute();
    if($result->rowCount() == 1){
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $new_user->setId($row['id_utilisateur']);
            $new_user->setUsername($row['username']);
            $new_user->setEmail($row['email']);
            $new_user->setPassword($row['password']);
            $new_user->setPhoto_profile($row['photo_profile']);
        }
        $user_seralized = serialize($new_user);

        $_SESSION['user'] = $user_seralized;
    }else if ($result->rowCount() == 0){
        //message d'erreur dans la meme page 
    }
    echo 
}
?>