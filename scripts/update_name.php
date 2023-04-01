<?php
session_start();
include_once 'connection.php';
$conn = new mysqli($host, $login, $password, $database);
$new_name = $_POST["new_name"];
$name = $_SESSION["Uname"];
$sql = "UPDATE users SET username = \"$new_name\" WHERE username = \"$name\"";
$conn->query($sql);
$conn->close();
$_SESSION["Uname"] = $new_name;
header("Location: /wolf_articles/profile.php");
?>