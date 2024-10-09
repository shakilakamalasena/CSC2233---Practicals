<?php
session_start();
if ($_SESSION['role'] != 'buyer') {
    header("Location: login.php");
    exit();
}

include('db.php');

$itemcode = $_GET['itemcode'];

// GET USERNAME
$buyer = $_SESSION['username'];
$buyer_id_sql = "SELECT user_id FROM user WHERE username='$buyer'";
$buyer_id_result = mysqli_query($conn, $buyer_id_sql);
$buyer_id = mysqli_fetch_assoc($buyer_id_result)['user_id'];

// GET SELLER ID
$seller_sql = "SELECT seller FROM item WHERE itemcode='$itemcode'";
$seller_result = mysqli_query($conn, $seller_sql);
$seller = mysqli_fetch_assoc($seller_result)['seller'];
$seller_id_sql = "SELECT user_id from user where username='$seller'";
$seller_id_result = mysqli_query($conn, $seller_id_sql);
$seller_id = mysqli_fetch_assoc($seller_id_result)['user_id'];

$sql = "INSERT INTO cart (buyer_id, itemcode, seller_id) VALUES ('$buyer_id', '$itemcode', '$seller_id')";

if (mysqli_query($conn, $sql)) {
    "Item purchased successfully!";
    header("Location: viewitem.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
