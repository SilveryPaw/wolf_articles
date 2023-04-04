<?php
include_once 'connection.php';
$table = $_GET["table"];
$id = $_GET["id"];
$conn = new mysqli($host, $login, $password, $database);
$sql = "DELETE FROM $table WHERE id=$id";
$conn->query($sql);
$conn->close();
header("Location: ../profile.php");
?>