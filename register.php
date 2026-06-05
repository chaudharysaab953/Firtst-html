<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$skills = $_POST['skills'];
$education = $_POST['education'];

$sql = "INSERT INTO students(name,email,password,skills,education)
VALUES('$name','$email','$password','$skills','$education')";

if(mysqli_query($conn, $sql)){
    echo "Registration Successful";
} else {
    echo "Error";
}

?>
