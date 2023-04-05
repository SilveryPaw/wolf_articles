<?php
    session_start();
    include_once __DIR__ . '/connection.php';
    include_once __DIR__ . '/redirect_by_path.php';
    $conn = new mysqli($host, $login, $password, $database);

    $uname = $_SESSION["Uname"];
    $theme = $conn->real_escape_string($_POST["theme"]);
    $descr = $conn->real_escape_string($_POST["descr"]);
    date_default_timezone_set("Europe/Moscow");
    $date = date("Y-m-d H:i:s");
    $sql1 = "INSERT INTO forums(forums.author_id, forums.name, forums.descr, forums.last_message) VALUES ((SELECT users.id FROM users WHERE users.username = \"$uname\"), \"$theme\", \"$descr\", \"$date\");";
    //$sql2 = "SELECT id FROM forums WHERE name = \"$_POST["theme"]\";"

    if($conn->connect_error)
    {
        die("Error: ".$conn->connect_error);
    }

    $conn->query($sql1);
    $id = mysqli_insert_id($conn);
    $sql3 = "CREATE TABLE `_forum_$id` (id INT AUTO_INCREMENT PRIMARY KEY, author_id INT NOT NULL DEFAULT 0, message TEXT NOT NULL, date_time DATETIME NOT NULL);";
    $conn->query($sql3);

    $dir = __DIR__ . "/../forum.php";
    redirect_by_path($dir);
    //header("Location: ../forum.php");
    $conn->close();
?>