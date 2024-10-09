<?php
include("conn.php");

mysqli_select_db($conn, "jobseekers");

$sql = "DROP DATABASE jobseekers";

if (!mysqli_query($conn, $sql)) {
    die('Error dropping the table ' . mysqli_error($conn));
} else {
    echo "Table deleted successfully!";
}

mysqli_close($conn);
