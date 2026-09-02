<?php

$host = "job-portal1.cboyy2qac1jk.eu-north-1.rds.amazonaws.com";
$user = "tanuja";
$password = "tanuja73";
$database = "jobportal1";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>
