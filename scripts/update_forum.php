<?php
include_once 'connection.php';
$conn = new mysqli($host, $login, $password, $database);
$id = $_POST["id"];
$name = $_POST["name"];
$text = $_POST["text"];
$sql = "UPDATE forums SET name = \"$name\", descr=\"$text\" WHERE id=$id";
$conn->query($sql);
$conn->close();
header("Location: ../profile.php");
?>