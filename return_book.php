<?php
include "config.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    mysqli_query($conn,
        "UPDATE issued_books
         SET status='Returned',
             return_date=CURDATE()
         WHERE id='$id'"
    );

    header("Location: return_book.php");
    exit();
}

$result = mysqli_query($conn,
    "SELECT * FROM issued_books ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Return Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1 align="center">🔄 Return Book</h1>

<center>

<table border="1" cellpadding="10" cellspacing="0">

<tr bgcolor="#007BFF" style="color:white;">
    <th>ID</th>
    <th>Student</th>
    <th>Book</th>
    <th>Issue Date</th>
    <th>Return Date</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['student_name']; ?></td>
    <td><?php echo $row['book_name']; ?></td>
    <td><?php echo $row['issue_date']; ?></td>
    <td><?php echo $row['return_date']; ?></td>
    <td><?php echo $row['status']; ?></td>

    <td>
    <?php
    if($row['status'] == "Issued")
    {
    ?>
        <a href="return_book.php?id=<?php echo $row['id']; ?>">
            Return
        </a>
    <?php
    }
    else
    {
        echo "Completed";
    }
    ?>
    </td>
</tr>

<?php
}
?>

</table>

<br>

<a href="index.php">🏠 Dashboard</a>

</center>

</body>
</html>