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
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="welcome.php" method="get">
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
</body>

</html>