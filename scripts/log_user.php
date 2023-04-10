<?php 
session_start();
include_once __DIR__ . '/connection.php';
$conn = new mysqli ($host, $login, $password, $database);

function is_correct()
{
    global $user_login, $user_pword, $conn, $_SESSION;

    $sql = "SELECT `pword` FROM `users` WHERE `username` = \"$user_login\" OR `mail` = \"$user_login\"";
    if($result = mysqli_query($conn, $sql))
    {
        if($result->num_rows > 0)
        {
            $result->data_seek(0);
            $row = $result->fetch_assoc();
            if(password_verify($user_pword, $row["pword"]))//Сравниваем хешированный пароль из бд с введенным паролем
            {
                $_SESSION["Uname"] = $user_login;
                $_SESSION["Upword"] = $row["pword"];
                echo "pass";
            }
            else
            {
                echo "fail";
            }
        }
        else
        {
            echo "fail";
        }
    }
}


header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"));//Стандартная команда для получения данных
$user_login = $data->Login;
$user_pword = $data->Password;
is_correct();
/*if (is_correct())
{
    echo(true);
}
else
{
    echo("Авторизация не удалась, проверьте имя пользователя и пароль.");
}*/
$conn->close();
?>