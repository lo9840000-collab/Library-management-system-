<?php

$host = "127.0.0.1";
$user = "root";
$password = "root";
$database = "library_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>