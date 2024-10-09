<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            flex-direction: column;
        }

        form {
            text-align: center;
        }

        .data {
            color: red;
        }
    </style>
</head>

<body>
    <?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])): ?>
        <h2>Welcome!</h2>
        <h4>Your Details</h4>
        <table>
            <tr>
                <td>Name: </td>
                <td class="data"><?php echo htmlspecialchars($_GET["name"]); ?></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td class="data"><?php echo htmlspecialchars($_GET["email"]); ?></td>
            </tr>
            <tr>
                <td>Registration No: </td>
                <td class="data"><?php echo htmlspecialchars($_GET["regno"]); ?></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td class="data">
                    You are a <?php echo htmlspecialchars($_GET["gender"]); ?>
                </td>
            </tr>
        </table>
    <?php else: ?>
        <form action="registerUsingOne.php" method="get">
            <h2>Registration Form</h2>
            <h3>Alumni Association - Faculty of Science</h3>
            <table>
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td><label for="regno">Registration No: </label></td>
                    <td><input type="text" name="regno"></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender: </label></td>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                    </td>
                </tr>
            </table>
            <input type="submit">
            <hr>
            DCS &copy; 2021
        </form>
    <?php endif; ?>
</body>

</html>