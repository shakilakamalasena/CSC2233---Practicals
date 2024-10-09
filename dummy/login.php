<?php
session_start();
include ('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] == 'seller') {
            header("Location: additem.php");
        } else {
            header("Location: viewitem.php");
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
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <h2>Login Form</h2>
    <form method="post">
        <label>Username: </label>
        <input type="text" name="username" required><br>
        <label>Password: </label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
        <input type="reset">
        If you are a new user create an account from <a href="">here</a>
    </form>
</body>

</html>