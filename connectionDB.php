<?php

$connection = mysqli_connect('localhost','root','','model');
if (!$connection) {
    echo "connection faild";
    die("connection faild ".mysqli_connect_error());
}
?>