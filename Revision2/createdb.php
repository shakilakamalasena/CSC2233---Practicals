<?php
include("conn.php");

$sql = "CREATE DATABASE PMIS IF NOT EXISTS";

if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>