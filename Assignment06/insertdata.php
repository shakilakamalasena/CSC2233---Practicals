<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $date = $_POST["date"];

    $dob = new DateTime($date);
    $today = new DateTime();
    $age = $today->diff($dob)->y;

    include("conn.php");
    mysqli_select_db($conn, "jobseekers");

    $sql = "INSERT INTO personal_info(title, name, gender, dateofbirth, age) 
        VALUES('$title', '$name', '$gender', '$date', $age)";

    if (!mysqli_query($conn, $sql)) {
        die("Error adding data " . mysqli_error($conn));
    } else {
        echo "Register Successfull";
    }

    $mysqli_close($conn);
}
