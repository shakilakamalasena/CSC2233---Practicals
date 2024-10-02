<?php
session_start();
include('conn.php');
mysqli_select_db($conn, 'ESHOP') or die("Could not select database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM user WHERE Uname='$username' AND Pwd='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row;
        $_SESSION['username'] = $row['Uname'];
        $_SESSION['role'] = $row['Role'];

        if ($row['Role'] == 'buyer') {
            header("Location: viewitem.php");
        } else {
            header("Location: adminpage.php");
        }
    } else {
        echo "Invalid username or password";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login Form</h2>
    <form action="login.php" method="POST">
        <label for="uname">Username: </label>
        <input type="text" name="uname" required><br><br>

        <label for="pwd">Password: </label>
        <input type="password" name="pwd" required><br><br>

        <input type="submit" value="Login">
        <input type="reset" value="Clear">
    </form>
</body>

</html>