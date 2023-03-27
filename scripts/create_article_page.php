<?php 
include_once "connection.php";
include_once "get_author_name.php";

$id = $_GET["id"];
$sql = "SELECT * FROM articles WHERE id = \"$id\";";
$conn = new mysqli($host, $login, $password, $database);
$result = mysqli_query($conn, $sql);
$result->data_seek(0);
$row = $result->fetch_assoc();
?>
<h1 id="articles_name"><?php echo htmlentities($row["name"]); ?></h1>
<p id="article_text"><?php echo $row["article_text"]; ?></h1>
<h3>Автор: <?php echo get_author_name($row["author_id"]); ?></h3>