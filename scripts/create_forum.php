<?php
    session_start();
    include_once 'connection.php';
    $uname = $_SESSION["Uname"];
    $theme = $_POST["theme"];
    $descr = $_POST["descr"];
    date_default_timezone_set("Europe/Moscow");
    $date = date("Y-m-d H:i:s");
    $sql1 = "INSERT INTO forums(forums.author_id, forums.name, forums.descr, forums.last_message) VALUES ((SELECT users.id FROM users WHERE users.username = \"$uname\"), \"$theme\", \"$descr\", \"$date\");";
    //$sql2 = "SELECT id FROM forums WHERE name = \"$_POST["theme"]\";"
    $conn = new mysqli($host, $login, $password, $database);

    if($conn->connect_error)
    {
        die("Error: ".$conn->connect_error);
    }

    $conn->query($sql1);
    $id = mysqli_insert_id($conn);
    $sql3 = "CREATE TABLE `_forum_$id` (id INT AUTO_INCREMENT PRIMARY KEY, author_id INT NOT NULL DEFAULT 0, message TEXT NOT NULL, date_time DATETIME NOT NULL);";
    $conn->query($sql3);

    header("Location: /wolf_articles/forum.php");
    $conn->close();
?>