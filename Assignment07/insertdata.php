<?php
include("conn.php");

$buyerPass = md5("buyer123");
$sellerPass = md5("seller123");

$sql = "INSERT INTO user(user_id, username, password, role) 
    VALUES(1, 'buyer', '$buyerPass', 'buyer'), 
    (2, 'seller', '$sellerPass', 'seller')";

if (!mysqli_query($conn, $sql)) {
    die("Error inserting data " . mysqli_error($conn));
}

echo "Data inserted.";
