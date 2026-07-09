<?php

$host = "rdsproject1.cboyy2qac1jk.eu-north-1.rds.amazonaws.com";
$user = "tanuja";
$password = "rutuja54321";
$database = "jobportal";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed");
}

?>
