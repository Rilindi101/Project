<?php

class DatabaseConnection{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $database = "project";
    

    function startConnection(){

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Database Connection Failed".$e->getMessage();
            return null;
        }


    }
}

?>