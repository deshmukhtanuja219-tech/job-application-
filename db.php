<?php

$host = "endpoint";
$user = "hostname";
$password = "password";
$database = "databasename";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>
