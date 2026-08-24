<?php
include "config.php";

if(isset($_POST['save']))
{
    $name = $_POST['student_name'];
    $usn = $_POST['usn'];
    $course = $_POST['course'];

    mysqli_query($conn,"INSERT INTO students(student_name,usn,course)
    VALUES('$name','$usn','$course')");

    header("Location: students.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 align="center">👨‍🎓 Add Student</h1>

<form method="post" style="width:350px;margin:auto;">

    <input type="text" name="student_name" placeholder="Student Name" required>
    <br><br>

    <input type="text" name="usn" placeholder="USN" required>
    <br><br>

    <input type="text" name="course" placeholder="Course" required>
    <br><br>

    <input type="submit" name="save" value="Save Student">

</form>

<br>

<center>
    <a href="students.php">⬅ Back</a>
</center>

</body>
</html>