<?php
include("conn.php");

mysqli_select_db($conn, "jobseekers");

$sql = "UPDATE personal_info SET title='Mrs.' WHERE name='A. Perera'";

if (!mysqli_query($conn, $sql)) {
    die("Record update unsuccessful.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="display.php">View Data</a>
</body>

</html>