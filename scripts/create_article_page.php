<?php 
include_once "connection.php";
include_once "get_author_name.php";

function convert_to_html($text){
    return str_replace(PHP_EOL, '<br>', $text);
}

$id = $_GET["id"];
$sql = "SELECT * FROM articles WHERE id = \"$id\";";
$conn = new mysqli($host, $login, $password, $database);
$result = mysqli_query($conn, $sql);
$result->data_seek(0);
$row = $result->fetch_assoc();
?>
<h3 id="article_author">Автор: <?php echo get_author_name($row["author_id"]); ?></h3>
<h1 id="article_name"><?php echo htmlentities($row["name"]); ?></h1>
<div id="article_text"><?php echo convert_to_html($row["article_text"]); ?></div>
