<?php
include_once __DIR__ . '/connection.php';
$table = $_GET["table"];
$id = $_GET["id"];
$conn = new mysqli($host, $login, $password, $database);
$sql = "SELECT * FROM $table WHERE id=$id LIMIT 1";
$info = [];

$result = mysqli_query($conn, $sql);
$result->data_seek(0);
$row = $result->fetch_assoc();

switch($table)
{
    case "articles":
        $info["name_label"] = "Название статьи";
        $info["text_label"] = "Текст статьи";
        $info["name"] = $row["name"];
        $info["text"] = $row["article_text"];
        $info["script"] = "update_article.php";
        break;
    case "forums":
        $info["name_label"] = "Тема форума";
        $info["text_label"] = "Подробное описание";
        $info["name"] = $row["name"];
        $info["text"] = $row["descr"];
        $info["script"] = "update_forum.php";
        break;
}
?>