<?php

include 'db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$skills = $_POST['skills'];
$salary = $_POST['salary'];
$location = $_POST['location'];

$sql = "INSERT INTO jobs(title,description,skills_required,salary,location)
VALUES('$title','$description','$skills','$salary','$location')";

if(mysqli_query($conn, $sql)){
    echo "Job Posted Successfully";
} else {
    echo "Error Posting Job";
}

?>
