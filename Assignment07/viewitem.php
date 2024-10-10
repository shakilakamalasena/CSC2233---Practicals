<?php
session_start();
include("conn.php");

$sellerid = $_SESSION["user_id"];
$sql = "SELECT * FROM item;";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Nothing to show!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Add Item</h2>
    <a href="signout.php">Sign Out</a><br><br>
    <a href="profile.php">Profile</a><br><br>
    <a href="additem.php">Add item page</a><br><br>

    <table border="1">
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Price</th>
            <?php
            if ($_SESSION["role"] == "buyer") { ?>
                <th>Seller</th>
            <?php } ?>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <?php
                if ($_SESSION["role"] == "seller" && $_SESSION["user_id"] == $row["seller"]) { ?>
                    <td><?php echo $row["itemcode"] ?></td>
                    <td><?php echo $row["itemname"] ?></td>
                    <td><?php echo $row["price"] ?></td>
                <?php } ?>

                <?php
                if ($_SESSION["role"] == "buyer") { ?>
                    <td><?php echo $row["itemcode"] ?></td>
                    <td><?php echo $row["itemname"] ?></td>
                    <td><?php echo $row["price"] ?></td>
                    <td><?php echo $row["seller"] ?></td>
                    <td><button>BUY</button></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>