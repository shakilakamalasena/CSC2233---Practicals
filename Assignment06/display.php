<?php
include("conn.php");

mysqli_select_db($conn, "jobseekers");

$sql = "SELECT * FROM personal_info";

$result = mysqli_query($conn, $sql);

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
    <table border="1">
        <tr>
            <th colspan="4">Job Seekers</th>
        </tr>
        <tr>
            <th><i>Title</i></th>
            <th><i>Name</i></th>
            <th><i>Gender</i></th>
            <th><i>Date of Birth</i></th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["title"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["dateofbirth"] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>