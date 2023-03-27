<?php 
include_once "connection.php";
session_start();
date_default_timezone_set("Europe/Moscow");

$conn = new mysqli($host, $login, $password, $database);
$date = date("Y-m-d H:i:s");
$message = $_POST["message"];
$name = $_SESSION["Uname"];
$id = $_GET["id"];
$tb = "_forum_$id";

$sql = "INSERT INTO `$tb` (`$tb`.`author_id`, `$tb`.`message`, `$tb`.`date_time`) VALUES ((SELECT `users`.`id` FROM `users` WHERE `users`.`username` = \"$name\"), \"$message\", \"$date\"); ";
$conn->query($sql);
$sql = "UPDATE `forums` SET `last_message` = \"$date\" WHERE `forums`.`id` = $id;";
$conn->query($sql);

header("Location: /wolf_articles/show_forum.php?id=$id");
?>