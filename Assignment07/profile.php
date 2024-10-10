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
    <?php
    if ($_SESSION["role"] == "buyer") { ?>
        <h1>Buyer's Profile</h1>
    <?php } else { ?>
        <h1>Seller's Profile</h1>
    <?php } ?>
    <a href="signout.php">Sign Out</a><br><br>
    <a href="viewitem.php">View item</a><br><br>

    <table border="1">
        <tr>
            <?php
            if ($_SESSION["role"] == "buyer") { ?>
                <th>Seller ID</th>
                <th>Item Code</th>
            <?php } else { ?>
                <th>Buyer ID</th>
                <th>Item Code</th>
            <?php }  ?>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <?php
                if ($_SESSION["role"] == "buyer") { ?>
                    <td><?php echo $row["seller"] ?></td>
                    <td><?php echo $row["itemcode"] ?></td>
                <?php } ?>

                <?php
                if ($_SESSION["role"] == "seller" && $_SESSION["user_id"] == $row["seller"]) { ?>
                    <td><?php echo $row["itemcode"] ?></td>
                    <td><?php echo $row["itemname"] ?></td>
                <?php } ?>

            </tr>
        <?php } ?>
    </table>
</body>

</html>