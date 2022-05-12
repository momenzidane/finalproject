<?php
// include("auth_session.php");
require_once 'connectionDB.php';


$id = $_GET['id'];
echo $id;

$sql = "delete from material where id=". $id;
if(mysqli_query($connection,$sql)){
    //echo "Deleted Successfully";
    header('Location:material.php');
    exit();
}else
echo "Error";