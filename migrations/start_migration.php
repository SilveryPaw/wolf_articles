<?php
include_once '../scripts/connection.php';
include_once 'migrations.php';

function get_multi_query($directory)
{
    $str = "";
    $files = array_diff(scandir($directory), array('..', '.'));
    foreach($files as $file)
    {
        $str .= file_get_contents($directory . "/" . $file);
    }
    return $str;
}

$sql = file_get_contents("structure/articles.txt");

$conn = new mysqli($host, $login, $password);
if($conn->connect_error)
{
    die("Ошибка подключения" . $conn->connect_error);
}

$migration = new Migrations();
$migration->set_connection($conn);
$migration->execute_query("DROP DATABASE IF EXISTS $database");
echo "Создание базы данных...";
if($migration->execute_query("CREATE DATABASE $database"))
{
    echo "База данных создана!<br>";
}
else
{
    die ("Ошибка создания базы данных!");
}
$conn = new mysqli($host, $login, $password, $database);
$migration->set_connection($conn);

$sql = get_multi_query("structure");
echo "Создание структуры...";
if($migration->execute_multi_query($sql))
{
    echo "Завершено!<br>";
}
else
{
    die ("Ошибка!");
}

$sql = get_multi_query("data");
echo "Добавление записей...";
if($migration->execute_multi_query($sql))
{
    echo "Завершено!<br>";
}
else
{
    die ("Ошибка!");
}

$sql = get_multi_query("configuration");
echo "Настройка...";
if($migration->execute_multi_query($sql))
{
    echo "Завершено!<br>";
}
else
{
    die ("Ошибка!");
}

echo "Миграция завершена!";

$conn->close();
?>