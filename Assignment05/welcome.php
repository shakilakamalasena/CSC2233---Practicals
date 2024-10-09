<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_GET["name"] ?></title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            flex-direction: column;
        }

        .data {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Welcome!</h2>
    <h4>Your Details</h4>
    <table>
        <tr>
            <td>Name: </td>
            <td class="data"><?php echo $_GET["name"] ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td class="data"><?php echo $_GET["email"] ?></td>
        </tr>
        <tr>
            <td>Registration No: </td>
            <td class="data"><?php echo $_GET["regno"] ?></td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td class="data">
                You are a <?php echo htmlspecialchars($_GET["gender"]) ?>
            </td>
        </tr>
    </table>
</body>

</html>