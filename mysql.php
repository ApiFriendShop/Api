<?php

function connect_db(){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=Shopping","root" ,"" );
    } catch(PDOException $e) {
     echo   $e->getMessage();
    }
    return $conn;
}

?>
