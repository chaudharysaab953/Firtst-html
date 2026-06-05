<?php

include 'db.php';

$sql = "SELECT * FROM jobs";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo $row['title'];
    echo "<br>";
}

?>
