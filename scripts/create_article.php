<?php
    session_start();
    include_once 'connection.php';
    $conn = new mysqli($host, $login, $password, $database);

    $uname = $_SESSION["Uname"];
    $art_name = $conn->real_escape_string($_POST["name"]); //Экранирование специальных символов строки
    $art_text = $conn->real_escape_string($_POST["text"]);
    $sql1 = "INSERT INTO articles(articles.name, articles.author_id, articles.article_text) VALUES (\"$art_name\", (SELECT users.id FROM users WHERE users.username = \"$uname\"), \"$art_text\");";

    if($conn->connect_error)
    {
        die("Error: ".$conn->connect_error);
    }

    $conn->query($sql1);

    header("Location: ../articles.php");
    $conn->close();
?>