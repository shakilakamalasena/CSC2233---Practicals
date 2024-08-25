<?php
session_start();
include('db.php');

if ($_SESSION['role'] == 'seller') {
    $seller = $_SESSION['username'];
    $sql = "SELECT * FROM item WHERE seller = '$seller'";
} else {
    $sql = "SELECT * FROM item";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Item</title>
    <link rel="stylesheet" href="viewitem.css">
</head>

<body>
    <h2>Items List</h2>
    <a href="logout.php">Sign Out</a>
    <a href="profile.php">Profile</a>
    <table border="1">
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Price</th>
            <?php if ($_SESSION['role'] == 'buyer') { ?>
                <th>Seller</th>
            <?php } ?>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['itemcode']; ?></td>
                <td><?php echo $row['itemname']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <?php if ($_SESSION['role'] == 'buyer') { ?>
                    <td><?php echo $row['seller']; ?></td>
                    <td><a href="buyitem.php?itemcode=<?php echo $row['itemcode']; ?>">BUY</a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>