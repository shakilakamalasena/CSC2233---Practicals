<?php
session_start();
if ($_SESSION['role'] != 'seller') {
    header("Location: login.php");
    exit();
}

include('db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $itemcode = $_POST['itemcode'];
    $itemname = $_POST['itemname'];
    $price = $_POST['price'];
    $seller = $_SESSION['username'];

    $sql = "INSERT INTO item (itemcode, itemname, price, seller) VALUES ('$itemcode', '$itemname', '$price', '$seller')";

    if (mysqli_query($conn, $sql)) {
        header("Location: viewitem.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="additem.css">
</head>

<body>
    <h2>Add Item</h2>
    <a href="logout.php">Sign Out</a>
    <a href="viewitem.php">View item</a>
    <a href="profile.php">Profile</a>
    <form method="post">
        <label>Item Code: </label>
        <input type="text" name="itemcode" required><br>
        <label>Item Name: </label>
        <input type="text" name="itemname" required><br>
        <label>Price: </label>
        <input type="number" name="price" min="1" required><br>
        <input type="submit" value="Submit Query">
    </form>
</body>

</html>