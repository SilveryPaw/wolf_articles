<?php 
    include_once __DIR__ . '/connection.php';
    include_once __DIR__ . '/get_author_name.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM forums WHERE id = \"$id\"";
    $conn = new mysqli($host, $login, $password, $database);
    $result = mysqli_query($conn, $sql);
    $result->data_seek(0);
    $row = $result->fetch_assoc();

?>

<div class="forum_theme">
    <div id="forum_info">
        <h1 id="author_name"><?php echo get_author_name($row["author_id"]); ?></h1>
        <p id="creation_date_time"><?php echo $row["creation_date_time"]; ?></p>
    </div>
    <h1 id="forum_theme"><?php echo $row["name"]; ?></h1>
    <p id="forum_descr"><?php echo $row["descr"]; ?></p1>
</div>