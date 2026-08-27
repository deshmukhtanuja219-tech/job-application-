<?php

$host = "endpoint";
$user = "user name";
$password = "password";
$database = "database name";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>
