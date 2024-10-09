<?php
include("conn.php");

mysqli_select_db($conn, "jobseekers");

$sql = "ALTER TABLE personal_info ADD age INT(4)";

if (!mysqli_query($conn, $sql)) {
    die('Error adding a column' . mysqli_error($conn));
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