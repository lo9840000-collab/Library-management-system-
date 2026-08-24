<?php
include "config.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM books WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $book = $_POST['book_name'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,"UPDATE books SET
    book_name='$book',
    author='$author',
    category='$category',
    quantity='$quantity'
    WHERE id='$id'");

    header("Location: books.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 align="center">✏️ Edit Book</h1>

<form method="post" style="width:350px;margin:auto;">

<input type="text" name="book_name"
value="<?php echo $row['book_name']; ?>" required><br><br>

<input type="text" name="author"
value="<?php echo $row['author']; ?>" required><br><br>

<input type="text" name="category"
value="<?php echo $row['category']; ?>" required><br><br>

<input type="number" name="quantity"
value="<?php echo $row['quantity']; ?>" required><br><br>

<input type="submit" name="update" value="Update Book">

</form>

<br>

<center>
<a href="books.php">⬅ Back</a>
</center>

</body>
</html>