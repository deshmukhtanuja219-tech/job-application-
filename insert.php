<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$skill = $_POST['skill'];
$experience = $_POST['experience'];
$phone = $_POST['phone'];

$sql = "INSERT INTO candidates
(name,email,skill,experience,phone)
VALUES
('$name','$email','$skill','$experience','$phone')";

if(mysqli_query($conn,$sql))
{
    echo "Application Submitted Successfully";
}
else
{
    echo "Error";
}

?>