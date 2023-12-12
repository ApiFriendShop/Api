<?php 
include_once "public/HomeModel.php";
header("Content-Type:application/json;charset=utf-8");
if($_GET['key']=="slider"){
    $return =  findSliders();
   
}
echo json_encode($return);
//converting array to JSON string