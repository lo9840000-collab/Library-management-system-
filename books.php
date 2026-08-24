<?php
include "config.php";

$result = mysqli_query($conn,"SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Books</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1 align="center">📚 Manage Books</h1>

<center>
<a href="add_book.php">➕ Add New Book</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
<tr bgcolor="#007BFF" style="color:white;">
    <th>ID</th>
    <th>Book Name</th>
    <th>Author</th>
    <th>Category</th>
    <th>Quantity</th>
    <th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['book_name']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td>
        <a href="edit_book.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete_book.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this book?')">Delete</a>
    </td>
</tr>
<?php
}
?>

</table>

<br>
<a href="index.php">🏠 Back to Dashboard</a>

</center>

</body>
</html>