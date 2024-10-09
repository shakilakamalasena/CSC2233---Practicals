<?php
include("conn.php");

mysqli_select_db($conn, "jobseekers");

$sql = "CREATE TABLE IF NOT EXISTS personal_info (
        id INT(6) PRIMARY KEY,
        title VARCHAR(50),
        name VARCHAR(50),
        gender VARCHAR(50),
        dateofbirth date
    )";

if (!mysqli_query($conn, $sql)) {
    die("Error creating table" . mysqli_error($conn));
}

mysqli_close($conn);
