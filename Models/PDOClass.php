<?php
class PDOClass{
    private $pdo;
    private $dsn;
    private $host = "localhost";
    private $port = "";
    private $dbname = "";
    private $user = "";
    private $password = "";

    public function __construct(){
        try{
            $dsn = "mysql:host=".$this->host.";port=".$this->port." ;dbname= ".$this->dbname;
            $this->pdo = new PDO($dsn,$this->user,$this->password);
        }catch(PDOException $e){
            echo "Erreur ..".$e->getMessage();
            die();
        }
    }

    public function prepared_request($sql){
        $ppdo= $this->pdo;
        $pdoStatement = $ppdo->prepare($sql);
        return $pdoStatement;
    }
}
?>