<?php
	session_start();
	include ('conn.php');
	mysqli_select_db($conn, "PMIS");
	
	$sql = "SELECT * FROM stocks";
	
	$result = mysqli_query($conn, $sql);
?>

<html>

<head>
    <title>View Items</title>
</head>
<body>
	<p>You logged as <?php echo $_SESSION["Uname"]?></p>
	<a href="logout.php">Logout<a>
	<p> </p>
	
	<table border="1">
		<tr>
            <th>Gname</th>
            <th>Type</th>
            <th>Mdate</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Expired</th>
		</tr>
		<?php while ($row = mysqli_fetch_assoc($result)) { 
			$expiredDate = date('Y-m-d', strtotime($row['Mdate'] . ' + 30 months'))
		?>
            <tr>
                <td><?php echo $row['Gname']; ?></td>
                <td><?php echo $row['Type']; ?></td>
				<td><?php echo $row['Mdate']; ?></td>
				<td><?php echo $row['Price']; ?></td>
				<td><?php echo $row['Quantity']; ?></td>
				<td><?php echo $expiredDate; ?></td>
            </tr>
        <?php } ?>
	</table>
	
</body>

</html>