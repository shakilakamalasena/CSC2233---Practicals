<?php
$nameError = $addressError = $emailError = "";
$name = $address = $email = "";
$formValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Missing";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["address"])) {
        $addressError = "Missing";
    } else {
        $address = $_POST["address"];
    }

    if (empty($_POST["email"])) {
        $emailError = "Missing";
    } else {
        $email = $_POST["email"];
    }

    if ($name != "" && $address != "" && $email != "") {
        $formValid = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Valid Example</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Form Valid Example</h1>
    <form method="post">
        Name: <input type="text" name="name">
        <span id="nameError"><?php echo $nameError ?></span><br><br>
        Address: <input type="text" name="address">
        <span id="addressError"><?php echo $addressError ?></span><br><br>
        Email: <input type="email" name="email">
        <span id="emailError"><?php echo $emailError ?></span><br><br>
        <input type="submit" value="Submit">
    </form>

    <br><br>
    <?php
    if ($formValid) {
        echo "<h3>Entered Details</h3>";
        echo "Name: " . $name . "<br/>";
        echo "Address: " . $address . "<br/>";
        echo "Email: " . $email . "<br/>";
    }
    ?>
</body>

</html>