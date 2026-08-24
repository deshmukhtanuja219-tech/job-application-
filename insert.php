<?php

require 'vendor/autoload.php';
include 'db.php';

use Aws\S3\S3Client;

$name = $_POST['name'];
$email = $_POST['email'];
$skill = $_POST['skill'];
$experience = $_POST['experience'];
$phone = $_POST['phone'];

$resumeName = $_FILES['resume']['name'];
$resumeTmp = $_FILES['resume']['tmp_name'];

$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'eu-north-1'
]);

$bucket = 'YOUR-S3-BUCKET-NAME';

$s3->putObject([
    'Bucket' => $bucket,
    'Key'    => 'resumes/' . $resumeName,
    'SourceFile' => $resumeTmp
]);

$resumePath = 'resumes/' . $resumeName;

$sql = "INSERT INTO candidates
(name,email,skill,experience,phone,resume)
VALUES
('$name','$email','$skill','$experience','$phone','$resumePath')";

if(mysqli_query($conn,$sql))
{
    echo "Application Submitted Successfully";
}
else
{
    echo "Error";
}

?>
