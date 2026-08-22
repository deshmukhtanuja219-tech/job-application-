<?php

$host = "database-1.cboyy2qac1jk.eu-north-1.rds.amazonaws.com";
$user = "user name";
$password = "password";
$database = "jobportal";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>
