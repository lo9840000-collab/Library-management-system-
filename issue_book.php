<?php
include "config.php";

if(isset($_POST['issue']))
{
    $student = $_POST['student'];
    $book = $_POST['book'];
    $date = date("Y-m-d");

    mysqli_query($conn,
        "INSERT INTO issued_books
        (student_name,book_name,issue_date,status)
        VALUES
        ('$student','$book','$date','Issued')"
    );

    echo "Book Issued Successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Issue Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1 align="center">📚 Issue Book</h1>

<form method="post" style="width:350px;margin:auto;">

    <input type="text"
           name="student"
           placeholder="Student Name"
           required>
    <br><br>

    <input type="text"
           name="book"
           placeholder="Book Name"
           required>
    <br><br>

    <input type="submit"
           name="issue"
           value="Issue Book">

</form>

<br>

<center>
    <a href="index.php">🏠 Dashboard</a>
</center>

</body>
</html>