<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
}


// $sql = "CREATE DATABASE IF NOT EXISTS library;";
// $sql .= "USE library;";
// $sql .= "CREATE TABLE IF NOT EXISTS books (
//     book_id INT(6) PRIMARY KEY,
//     author VARCHAR(255) NOT NULL,
//     book_name VARCHAR(255) NOT NULL,
//     isbn_no INT(10) NOT NULL
// );";

// if (!mysqli_multi_query($conn, $sql)) {
//     die("Error : " . mysqli_error($conn));
// }
