<?php
include_once __DIR__ . '/connection.php';
$id = $_GET["id"];
$forum_table = "_forum_".$id;
$sql = "SELECT *, (SELECT `users`.`username` FROM `users` WHERE `$forum_table`.`author_id` = `users`.`id`) AS `author_name` FROM `$forum_table`";
$conn = new mysqli($host, $login, $password, $database);

if($conn->connect_error)
{
    die("Error: ".$conn->connect_error);
}

if($result = mysqli_query($conn, $sql))
{
    include_once __DIR__ . '/create_forum_messages_block.php';
}
$conn->close();
?>