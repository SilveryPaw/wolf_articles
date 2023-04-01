<?php
include_once 'connection.php';
$conn = new mysqli($host, $login, $password, $database);
$id = $_POST["id"];
$name = $conn->real_escape_string($_POST["name"]);
$text = $conn->real_escape_string($_POST["text"]);
$sql = "UPDATE articles SET name = \"$name\", article_text=\"$text\" WHERE id=$id";
echo $id;
$conn->query($sql);
$conn->close();
header("Location: /wolf_articles/profile.php");
?>