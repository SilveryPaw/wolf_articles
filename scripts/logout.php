<?php
    session_start();
    unset($_SESSION["Uname"], $_SESSION["Upword"]);
    header("Location: /wolf_articles/");
    exit();
?>