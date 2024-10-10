<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("DB connection unsuccessful: " . mysqli_connect_error());
}

mysqli_select_db($conn, "emarketing");
