<?php
include("conn.php");
mysqli_select_db($conn, "PMIS");

$sql1 = "CREATE TABLE users (Uid CHAR(4) PRIMARY KEY, Uname VARCHAR(100), Pwd VARCHAR(50), Role VARCHAR(20))";
$sql2 = "CREATE TABLE stocks (Icode INT(4) PRIMARY KEY, Gname VARCHAR(100), Type VARCHAR(20), Mdate DATE, Price INT(10), Quantity INT(5))";

if (mysqli_query($conn, $sql1)) {
	echo "User table created successfully";
} else {
	echo "Error creating User table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql2)) {
	echo "Stocks table created successfully";
} else {
	echo "Error creating Stocks table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>