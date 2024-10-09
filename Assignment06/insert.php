<?php
include("conn.php");

mysqli_select_db($conn, "jobseekers");

$sql = "INSERT INTO personal_info(title, name, gender, dateofbirth) 
    VALUES('Ms.', 'K. Sedara', 'F', '1980-11-02'), 
            ('Mr.', 'S. Alwis', 'M', '1969-03-03'), 
            ('Prof.', 'A. Perera', 'F', '1982-04-14')";

if (!mysqli_query($conn, $sql)) {
    die("Error inserting data" . mysqli_error($conn));
}

mysqli_close($conn);
