<?php
include_once 'connection.php';
$table = $_GET["table"];
$id = $_GET["id"];
$conn = new mysqli($host, $login, $password, $database);
$sql = "DELETE FROM $table WHERE id=$id";
$conn->query($sql);
header("Location: /wolf_articles/profile.php");
?>