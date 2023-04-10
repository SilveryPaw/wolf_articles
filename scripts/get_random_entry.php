<?php

include_once __DIR__ . '/connection.php';
$conn = new mysqli($host, $login, $password, $database);
if(($table == "articles")||($table == "forums"))
{
    $sql = "SELECT *, (SELECT users.username FROM users WHERE $table.author_id = users.id) AS author_name FROM $table ORDER BY RAND() LIMIT 1";

}else
{
    $sql = "SELECT * FROM $table ORDER BY RAND() LIMIT 1";
}
if($conn->connect_error)
{
    die("Error: ".$conn->connect_error);
}
if($result = mysqli_query($conn, $sql))
{
    $pages_count = 0;
    switch($table){
        case "articles":
            include_once __DIR__ . '/create_articles_block.php';
            break;
        case "forums":
            include_once __DIR__ . '/create_forums_block.php';
            break;
        case "facts":
            include_once __DIR__ . '/create_facts_block.php';
            break;
    }
}
?>