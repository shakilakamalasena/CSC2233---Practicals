<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Create database
// $sql = "CREATE DATABASE emarketing";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

mysqli_select_db($conn, "emarketing");

// // Create tables
// $sql = "CREATE TABLE item (
//         itemcode INT(6) PRIMARY KEY,
//         itemname VARCHAR(50) NOT NULL,
//         price FLOAT NOT NULL,
//         seller VARCHAR(30) NOT NULL
//     )";
// if (mysqli_query($conn, $sql)) {
//     echo "\"item\" table created successfully";
// } else {
//     echo "Error creating table" . mysqli_error($conn);
// }

// $sql = "CREATE TABLE user (
//         user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         username VARCHAR(30) NOT NULL,
//         password VARCHAR(255) NOT NULL,
//         role VARCHAR(10) NOT NULL
//     )";
// if (mysqli_query($conn, $sql)) {
//     echo "\"user\" table created successfully";
// } else {
//     echo "Error creating table" . mysqli_error($conn);
// }

// $sql = "CREATE TABLE cart (
//         buyer_id INT(6) UNSIGNED NOT NULL,
//         itemcode INT(6) UNSIGNED NOT NULL,
//         seller_id INT(6) UNSIGNED NOT NULL
//     )";
// if (mysqli_query($conn, $sql)) {
//     echo "\"cart\" table created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// // Insert initial users
// $sql = "INSERT INTO user (username, password, role) VALUES 
//         ('seller2', md5('seller123'), 'seller')";
// if (mysqli_query($conn, $sql)) {
//     echo "Data inserted successfully";
// } else {
//     echo "Error inserting data: " . mysqli_error($conn);
// }

// mysqli_close($conn);
