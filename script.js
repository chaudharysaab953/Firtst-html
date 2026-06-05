console.log("Student Job Portal Loaded Successfully");

function showMessage() {
    alert("Welcome to Student Job Portal");
}
```

---

# 10. File Name: backend/db.php

```php
<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "student_job_portal";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection Failed");
}

?>
