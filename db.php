<?php
class db {
    public $connection;

    function setconnection() {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=cancion_database", "root", "");
            //echo "Connection established";
        } 
        catch (PDOException $e) {
            //echo "Connection failed: " . $e->getMessage();
        }
    }
}
