<?php
function get_author_name($auth_id)
{
    global $conn; 
    $sql = "SELECT username FROM users WHERE id = $auth_id";
    $result = mysqli_query($conn, $sql);
    $result->data_seek(0);
    $row = $result->fetch_assoc();
    return $row["username"];
}
?>