<?php

class DbConnection{
    public function __construct()
    {
        //session_start();
        $dbUserName = 'root';
        $dbPassword='root'; 
        $dbName='php_b8';

        try{
            $this->conn = new PDO ('mysql:host=localhost;dbname='.$dbName , $dbUserName , $dbPassword );
        }catch(PDOException $e){
                echo 'Database Connection Failed';
                die();
        }

        
    }
}

?>