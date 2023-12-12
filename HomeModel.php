<?php
include_once 'mysql.php';

function findSliders(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT id,Title,img FROM slider where status='on' ");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}
function findPoster(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT * FROM Posters where status='on'");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}
function findCartFirst(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT * FROM cart_first ");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}
function findCart(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT * FROM cart");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}
function findCatgory(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT * FROM catgory ");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}
function findComments(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT * FROM coment ");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}
function findLives(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT * FROM liked ");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}
function findUsers(){
    $conn=connect_db();
    $query=$conn->prepare("SELECT * FROM user");
    $query->execute();
    $rez=$query->fetchAll(PDO::FETCH_OBJ);
    return $rez;
}

