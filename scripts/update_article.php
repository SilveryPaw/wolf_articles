<?php
include_once __DIR__ . '\connection.php';
include_once __DIR__ . '\redirect_by_path.php';
$conn = new mysqli($host, $login, $password, $database);
$id = $_POST["id"];
$name = $conn->real_escape_string($_POST["name"]);
$text = $conn->real_escape_string($_POST["text"]);
$sql = "UPDATE articles SET name = \"$name\", article_text=\"$text\" WHERE id=$id";
echo $id;
$conn->query($sql);
$conn->close();
$dir = __DIR__ . "\..\profile.php";
redirect_by_path()
//header("Location: ../profile.php");
?>