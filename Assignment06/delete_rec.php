<?php
include("conn.php");

mysqli_select_db($conn, "jobseekers");

$sql = "DELETE FROM personal_info";

if (!mysqli_query($conn, $sql)) {
    die("Error deleting data " . mysqli_error($conn));
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="display.php">View data</a>
</body>

</html>