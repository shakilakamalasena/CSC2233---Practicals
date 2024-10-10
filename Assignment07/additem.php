<?php
session_start();
include("conn.php");
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemcode = $_POST["itemcode"];
    $itemname = $_POST["itemname"];
    $price = $_POST["price"];
    $seller = $_SESSION["user_id"];

    $sql = "INSERT INTO item(itemcode, itemname, price, seller) 
        VALUES('$itemcode', '$itemname', '$price', '$seller');";

    if (!mysqli_query($conn, $sql)) {
        $error = "Error inserting data!";
    } else {
        header("Location: viewitem.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Add Item</h2>
    <a href="signout.php">Sign Out</a><br><br>
    <a href="viewitem.php">View Item</a><br><br>
    <a href="profile.php">Profile</a><br><br>

    <form action="" method="post">
        Item Code: <input type="text" name="itemcode"><br>
        Item Name: <input type="text" name="itemname"><br>
        Price: <input type="text" name="price"><br>
        <input type="submit" value="Submit Query">
    </form>
    <span><?php echo $error ?></span>
</body>

</html>