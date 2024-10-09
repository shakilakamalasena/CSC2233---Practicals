<?php

include("conn.php");

$sql = "CREATE DATABASE IF NOT EXISTS jobseekers";

if (!mysqli_query($conn, $sql)) {
    echo "Error creating database " . mysqli_error($conn);
}

mysqli_close($conn);
