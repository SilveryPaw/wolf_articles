<?php
include_once 'connection.php';
$username = $_SESSION["Uname"];
$sql_articles = "SELECT * FROM `articles` WHERE `articles`.`author_id` = (SELECT `users`.`id` FROM `users` WHERE `users`.`username` = \"$username\")";
$sql_forums = "SELECT * FROM `forums` WHERE `forums`.`author_id` = (SELECT `users`.`id` FROM `users` WHERE `users`.`username` = \"$username\")";

$conn = new mysqli($host, $login, $password, $database);
if($conn->connect_error)
{
    die("Error: ".$conn->connect_error);
}
?>
<div class="info_block">
    <h1>Статьи</h1>
    <?php
    $result = mysqli_query($conn, $sql_articles);
    if($result->num_rows > 0)
    {
        include_once 'create_user_info_block.php';
    }
    else
    {
        echo "<div class=\"result\"> нет данных </div>";
    }?>
    <h1>Форумы</h1>
    <?php
    $result = mysqli_query($conn, $sql_forums);
    if($result->num_rows > 0)
    {
        include_once 'create_user_info_block.php';
    }
    else{
        echo "<div class=\"result\"> нет данных </div>";
    }
    ?>
</div>

<?php
$conn->close();
?>