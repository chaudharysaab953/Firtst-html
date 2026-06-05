<?php

include 'db.php';

$student_name = $_POST['student_name'];
$email = $_POST['email'];
$job_title = $_POST['job_title'];
$message = $_POST['message'];

$sql = "INSERT INTO applications(student_name,email,job_title,message)
VALUES('$student_name','$email','$job_title','$message')";

if(mysqli_query($conn, $sql)){
    echo "Application Submitted Successfully";
} else {
    echo "Error";
}

?>
