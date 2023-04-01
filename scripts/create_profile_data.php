<?php
include_once 'connection.php';
$username = $_SESSION["Uname"];
$sql_articles = "SELECT * FROM `articles` WHERE `articles`.`author_id` = (SELECT `users`.`id` FROM `users` WHERE `users`.`username` = \"$username\")";
$sql_forums = "SELECT * FROM `forums` WHERE `forums`.`author_id` = (SELECT `users`.`id` FROM `users` WHERE `users`.`username` = \"$username\")";

function create_user_info_block($type, $result)
{ 
?>
    <div class="result">
        <?php foreach($result as $row)
        {?>
        <div class = "item">
            <h3 class="item_name"><a href="/wolf_articles/show_<?php echo $type; ?>.php?id=<?php echo $row["id"]; ?>"><?php echo htmlentities($row["name"]) ?></a></h3>
            <div class="edit_links">
                <a href="/wolf_articles/edit_item.php?table=<?php echo $type; ?>s&id=<?php echo $row["id"]; ?>">Изменить</a>
                <a href="scripts/delete_entry.php?table=<?php echo $type; ?>s&id=<?php echo $row["id"]; ?>">Удалить</a>   
            </div>    
        </div>
        <?php } ?>
    </div>
<?php 
}

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
        create_user_info_block("article", $result);
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
        create_user_info_block("forum", $result);
    }
    else{
        echo "<div class=\"result\"> нет данных </div>";
    }
    ?>
</div>

<?php
$conn->close();
?>