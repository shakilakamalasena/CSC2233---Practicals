<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

include('db.php');

$username = $_SESSION['username'];
$user_sql = "SELECT * FROM user WHERE username='$username'";
$user = mysqli_query($conn, $user_sql);

$user_id = mysqli_fetch_assoc($user)['user_id'];
$role = mysqli_fetch_assoc($user)['role'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <h2>Profile</h2>
    <a href="logout.php">Sign Out</a>
    <a href="viewitem.php">View item</a>

    <table border="1">
        <?php if ($role == 'buyer'): ?>
            <tr>
                <th>Seller ID</th>
                <th>Item Code</th>
            </tr>
            <?php
            $sql = "SELECT seller_id, itemcode FROM cart WHERE buyer_id='$user_id'";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['seller_id'] . "</td><td>" . $row['itemcode'] . "</td></tr>";
            }
            ?>

        <?php elseif ($role == 'seller'): ?>
            <tr>
                <th>Buyer ID</th>
                <th>Item Code</th>
            </tr>
            <?php
            $sql = "SELECT buyer_id, itemcode FROM cart WHERE seller='$username'";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['buyer_id'] . "</td><td>" . $row['itemcode'] . "</td></tr>";
            }
            ?>
        <?php endif; ?>
    </table>
</body>

</html>