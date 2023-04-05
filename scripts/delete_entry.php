<?php
include_once __DIR__ . '\connection.php';
include_once __DIR__ . '\redirect_by_path.php';

$table = $_GET["table"];
$id = $_GET["id"];
$conn = new mysqli($host, $login, $password, $database);
$sql = "DELETE FROM $table WHERE id=$id";
$conn->query($sql);
$conn->close();

$dir = __DIR__ . "\..\profile.php";
redirect_by_path($dir);
//header("Location: ../profile.php");
?>