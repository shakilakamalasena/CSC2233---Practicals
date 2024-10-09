<?php
include("conn.php");
mysqli_select_db($conn, "library");

$sql = "SELECT * FROM books";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <h1>Available Books</h1>
    <table border="1">
        <tr>
            <th>Author</th>
            <th>Book Name</th>
            <th>ISBN No</th>
            <th></th>
            <th></th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["author"] ?></td>
                <td><?php echo $row["book_name"] ?></td>
                <td><?php echo $row["isbn_no"] ?></td>
                <td><button><a href="delete.php">Delete</a></button></td>
                <td><button><a href="update.php">Update</a></button></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>