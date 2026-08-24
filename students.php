<?php
include "config.php";

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 align="center">👨‍🎓 Students</h1>

<center>

<a href="add_student.php">➕ Add Student</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">

<tr bgcolor="#007BFF" style="color:white;">
    <th>ID</th>
    <th>Name</th>
    <th>USN</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td><?php echo $row['usn']; ?></td>

<td><?php echo $row['course']; ?></td>

<td>
<a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
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