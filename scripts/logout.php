<?php
    include_once __DIR__ . '/redirect_by_path.php';
    session_start();
    unset($_SESSION["Uname"], $_SESSION["Upword"]);
    $dir = __DIR__ . "/../index.php";
    redirect_by_path($dir);
    //header("Location: ../index.php");
    exit();
?>