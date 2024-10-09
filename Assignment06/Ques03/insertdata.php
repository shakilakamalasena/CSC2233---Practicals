<?php
$message = "";

include("conn.php");
mysqli_select_db($conn, "library");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $isbn = mysqli_real_escape_string($conn, $_POST["isbn"]);

    $sql = "INSERT INTO books(book_id, author, book_name, isbn_no) VALUES($id, '$author', '$name', $isbn)";

    if (mysqli_query($conn, $sql)) {
        $message = "Book added successfully!";
    } else {
        $message = "<div>Failed adding the book!</div>";
    }

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <style>
        h2 {
            background-color: blanchedalmond;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            border: 1px solid black;
            flex-direction: column;
        }

        tr,
        td {
            padding: 10px;
        }

        .button {
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        span {
            color: green;
        }

        div {
            color: red;
        }

        a {
            float: right;
        }
    </style>
</head>

<body>
    <h2>LIBRARY MANAGEMENT SYSTEM</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Book id: </td>
                <td><input type="text" name="id" required></td>
            </tr>
            <tr>
                <td>Author: </td>
                <td><input type="text" name="author" required></td>
            </tr>
            <tr>
                <td>Book Name: </td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>ISBN No: </td>
                <td><input type="text" name="isbn" required></td>
            </tr>
        </table>
        <input type="submit" value="Insert Data" class="button">
        <span><?php echo $message ?></span>
        <input type="reset" value="Clear" class="button">
        <a href="display.php">View Books</a>
    </form>
</body>

</html>