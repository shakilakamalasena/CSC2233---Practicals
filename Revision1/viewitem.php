<?php
session_start();
include('conn.php');
mysqli_select_db($conn, 'ESHOP') or die("Could not select database");

$username = $_SESSION['username'];

$sql = "SELECT * FROM product";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
</head>

<body>
    <p>You logged as <?php echo $username ?></p>
    <a href="">Sign Out</a><br>
    <h2>Available Products</h2>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th></th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['Pname']; ?></td>
                <td><?php echo $row['Uprice']; ?></td>
                <td><button>Order</button></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>