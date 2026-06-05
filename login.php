<?php

include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    header("Location: ../student-dashboard.html");
} else {
    echo "Invalid Email or Password";
}

?>
