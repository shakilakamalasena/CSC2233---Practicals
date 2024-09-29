<?php
	session_start();
	include ('conn.php');
	mysqli_select_db($conn, "PMIS");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM users WHERE Uname='$username' AND Pwd='$password'";
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['Uname'] = $row['Uname'];
			$_SESSION['Role'] = $row['Role'];

			if ($row['Role'] == 'buyer') {
				header("Location: buyerpage.php");
			} else {
				header("Location: adminPage.php");
			}
		} else {
			echo "Invalid username or password";
		}
	}
?>

<html>
<head>
    <title>Login</title>
</head>

<body>
    <h2>Login Form</h2>
    <form method="post">
        <label>Username: </label>
        <input type="text" name="username" required><br>
        <label>Password: </label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
        <input type="reset" value="Clear">
    </form>
</body>

</html>