<?php
include "gemini_api.php";

$answer = "";

if(isset($_POST['ask']))
{
    $question = $_POST['question'];

    if($question != "")
    {
        $answer = askAI($question);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AI Library Assistant</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1 align="center">🤖 AI Library Assistant</h1>

<form method="post" style="width:400px;margin:auto;">

    <input type="text"
           name="question"
           placeholder="Ask about books..."
           required>

    <br><br>

    <input type="submit"
           name="ask"
           value="Ask AI">

</form>

<?php
if($answer != "")
{
?>

<div style="width:400px;margin:30px auto;background:white;
padding:20px;border-radius:10px;box-shadow:0 2px 8px #aaa;">

    <h3>🤖 AI Answer</h3>

    <p><?php echo nl2br(htmlspecialchars($answer)); ?></p>

</div>

<?php
}
?>

<center>
    <a href="index.php">🏠 Dashboard</a>
</center>

</body>
</html>