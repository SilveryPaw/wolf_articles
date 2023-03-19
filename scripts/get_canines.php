<?php
include_once 'connection.php';

$sql = "SELECT * FROM `canines`";
$conn = new mysqli($host, $login, $password, $database);

if($conn->connect_error)
{
    die("Error: ".$conn->connect_error);
}

if($result = mysqli_query($conn, $sql))
{
    include_once 'create_canines_block.php';
}
$conn->close();
?>