<?php
include("conn.php");
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $role = $_POST["role"];

    $sql = "INSERT INTO user(user_id, username, password, role) VALUES($user_id, '$username', '$password', '$role');";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Register Failed";
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
    <title>Register</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Register</h2>
    <form action="" method="post">
        <label for="">User ID: </label>
        <input type="text" name="user_id" id="" required><br><br>
        <label for="">Username: </label>
        <input type="text" name="username" id="" required><br><br>
        <label for="">Password: </label>
        <input type="password" name="password" required><br><br>
        <label for="">Role: </label>
        <select name="role" id="">
            <option value="buyer">Buyer</option>
            <option value="seller">Seller</option>
        </select><br><br>
        <input type="submit" value="Register">
        <input type="reset" value="Clear">
    </form>
    <p>Already have an account? <a href="login.php">login</a></p>
</body>

</html>