<?php
include_once 'connection.php';

$sql = "SELECT *, (SELECT `users`.`username` FROM `users` WHERE `articles`.`author_id` = `users`.`id`) AS `author_name` FROM `articles`";
$conn = new mysqli($host, $login, $password, $database);

if($conn->connect_error)
{
    die("Error: ".$conn->connect_error);
}

if($result = mysqli_query($conn, $sql))
{
    include_once 'create_articles_block.php';
}
$conn->close();
?>