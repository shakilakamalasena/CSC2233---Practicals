<?php
session_start();
include("conn.php");
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM user where username = '$username' AND password = '$password';";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        $error = "Username or Password incorrect";
    }

    $row = mysqli_fetch_assoc($result);
    $_SESSION["role"] = $row["role"];
    $_SESSION["username"] = $row["username"];
    $_SESSION["user_id"] = $row["user_id"];

    if($row["role"] == "seller") {
        header("Location: additem.php");
    } elseif($row["role"] == "buyer") {
        header("Location: viewitem.php");
    } else {
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="">Username: </label>
        <input type="text" name="username" id=""><br>
        <label for="">Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
        <input type="reset" value="Clear">
        <span><?php echo $error ?></span>
    </form>
    <p>If you are new user create a account from <a href="register.php">here</a></p>
</body>

</html>