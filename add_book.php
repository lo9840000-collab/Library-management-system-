<?php
include "config.php";

if(isset($_POST['save']))
{
    $book = $_POST['book_name'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,"INSERT INTO books(book_name,author,category,quantity)
    VALUES('$book','$author','$category','$quantity')");

    header("Location: books.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 align="center">➕ Add Book</h1>

<form method="post" style="width:350px;margin:auto;">

    <input type="text" name="book_name" placeholder="Book Name" required><br><br>

    <input type="text" name="author" placeholder="Author Name" required><br><br>

    <input type="text" name="category" placeholder="Category" required><br><br>

    <input type="number" name="quantity" placeholder="Quantity" min="1" required><br><br>

    <input type="submit" name="save" value="Save Book">

</form>

<br>

<center>
    <a href="books.php">⬅ Back</a>
</center>

</body>
</html>