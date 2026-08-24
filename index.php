<?php
include "config.php";

$books = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM books"));
$students = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM students"));
$issued = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM issued_books"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>AI Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 align="center">📚 AI Library Management System</h1>

<div class="container">

    <div class="card">
        <h2><?php echo $books; ?></h2>
        <p>Total Books</p>
    </div>

    <div class="card">
        <h2><?php echo $students; ?></h2>
        <p>Total Students</p>
    </div>

    <div class="card">
        <h2><?php echo $issued; ?></h2>
        <p>Issued Books</p>
    </div>

</div>

<div class="menu">

    <a href="books.php">📖 Manage Books</a>

    <a href="students.php">👨‍🎓 Students</a>

    <a href="issue_book.php">📚 Issue Book</a>

    <a href="return_book.php">🔄 Return Book</a>

    <a href="ai_chat.php">🤖 AI Assistant</a>

</div>

</body>
</html>