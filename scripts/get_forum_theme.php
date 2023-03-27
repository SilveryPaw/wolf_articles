<?php 
    include_once 'connection.php';
    include_once 'get_author_name.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM forums WHERE id = \"$id\"";
    $conn = new mysqli($host, $login, $password, $database);
    $result = mysqli_query($conn, $sql);
    $result->data_seek(0);
    $row = $result->fetch_assoc();

?>

<div class="forum_theme">
    <h1><?php echo $row["name"]; ?></h1>
    <p><?php echo $row["descr"]; ?></p1>
    <p><?php echo get_author_name($row["author_id"]); ?></p>
</div>