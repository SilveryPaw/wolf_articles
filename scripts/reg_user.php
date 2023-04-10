<?php 
include_once __DIR__ . '/connection.php';
$conn = new mysqli ($host, $login, $password, $database);

function is_registred()
{
    global $user_name, $user_mail, $conn;

    $sql = "SELECT * FROM `users` WHERE `username` = \"$user_name\" OR `mail` = \"$user_mail\"";
    if($result = mysqli_query($conn, $sql))
    {
        if($result->num_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

function register_user()
{
    global $user_name, $user_mail, $conn, $user_pword;

    $sql = "INSERT INTO `users` (`username`, `pword`, `mail`) VALUES (\"$user_name\", \"$user_pword\", \"$user_mail\")";
    $result = mysqli_query($conn, $sql);
}

header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"));//Стандартная команда для получения данных
//print_r($data);
$user_name = $data->Name;
$user_pword = password_hash($data->Password, PASSWORD_DEFAULT);
$user_mail = $data->Email;
if (is_registred())
{
    echo("fail");
}
else
{
    register_user();
    echo("success");
}
$conn->close();
?>