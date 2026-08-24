<?php
include "config.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM students WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['student_name'];
    $usn = $_POST['usn'];
    $course = $_POST['course'];

    mysqli_query($conn,"UPDATE students SET
    student_name='$name',
    usn='$usn',
    course='$course'
    WHERE id='$id'");

    header("Location: students.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 align="center">✏️ Edit Student</h1>

<form method="post" style="width:350px;margin:auto;">

<input type="text" name="student_name"
value="<?php echo $row['student_name']; ?>" required>
<br><br>

<input type="text" name="usn"
value="<?php echo $row['usn']; ?>" required>
<br><br>

<input type="text" name="course"
value="<?php echo $row['course']; ?>" required>
<br><br>

<input type="submit" name="update" value="Update Student">

</form>

<br>

<center>
<a href="students.php">⬅ Back</a>
</center>

</body>
</html>