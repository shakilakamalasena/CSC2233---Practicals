<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $date = $_POST["date"];

    $dob = new DateTime($date);
    $today = new DateTime();
    $age = $today->diff($dob)->y;

    if ($age > 45) {
        echo "You cannot register as your age is 45 or above.<br>";
    } else {
        echo "<h2>Entered Details</h2>";
        echo "Name: " . htmlspecialchars($title) . " " . htmlspecialchars($name) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Date of Birth: " . htmlspecialchars($date) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        h2 {
            background-color: #fed1d1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        table {
            padding: 20px;
        }

        td {
            padding-right: 50px;
            padding-bottom: 10px;
        }

        .buttons {
            float: right;
            margin: 10px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h2>Registration Form</h2>
        <h3><b><u>Registration Details</u></b></h3>

        <table>
            <tr>
                <td>Title: </td>
                <td>
                    <select name="title" id="">
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male <br>
                    <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="date"></td>
            </tr>
        </table>
        <input class="buttons" type="reset">
        <input class="buttons" type="submit" value="Sign Up">
    </form>
</body>

</html>