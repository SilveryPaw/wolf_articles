<?php
include_once __DIR__ . '/connection.php';

$entry_per_page = 5;
$offset = ($page - 1) * $entry_per_page;

$sql = "SELECT *, (SELECT `users`.`username` FROM `users` WHERE `forums`.`author_id` = `users`.`id`) AS `author_name` FROM `forums` ORDER BY `id` LIMIT $entry_per_page OFFSET $offset";
$sql_count = "SELECT COUNT(*) FROM `forums`";
$conn = new mysqli($host, $login, $password, $database);

if($conn->connect_error)
{
    die("Error: ".$conn->connect_error);
}

if(($result = mysqli_query($conn, $sql))&&($count = mysqli_query($conn, $sql_count)))
{
    $row = $count->fetch_row();
    $pages_count = ceil($row[0] / $entry_per_page);
    include_once __DIR__ . '/create_forums_block.php';
}
$conn->close();
?>