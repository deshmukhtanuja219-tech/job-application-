<?php

$host = "YOUR-RDS-ENDPOINT";
$user = "admin";
$password = "YOUR-PASSWORD";
$database = "jobportal";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed");
}

?>