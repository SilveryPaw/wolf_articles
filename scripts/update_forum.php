<?php
include_once __DIR__ . '\connection.php';
$conn = new mysqli($host, $login, $password, $database);
$id = $_POST["id"];
$name = $_POST["name"];
$text = $_POST["text"];
$sql = "UPDATE forums SET name = \"$name\", descr=\"$text\" WHERE id=$id";
$conn->query($sql);
$conn->close();
$dir = __DIR__ . "\..\profile.php";
redirect_by_path($dir);
//header("Location: ../profile.php");
?>