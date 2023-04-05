<?php
session_start();
include_once __DIR__ . '/connection.php';
include_once __DIR__ . '/redirect_by_path.php';
$conn = new mysqli($host, $login, $password, $database);
$new_name = $_POST["new_name"];
$name = $_SESSION["Uname"];
$sql = "UPDATE users SET username = \"$new_name\" WHERE username = \"$name\"";
$conn->query($sql);
$conn->close();
$_SESSION["Uname"] = $new_name;
$dir = __DIR__ . "/../profile.php";
redirect_by_path($dir);
//header("Location: ../profile.php");
?>