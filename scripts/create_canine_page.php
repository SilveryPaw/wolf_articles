<?php
include_once __DIR__ . '\connection.php';

function convert_to_html($text){
    return str_replace(PHP_EOL, '<br>', $text);
}

$id = $_GET["id"];
$sql = "SELECT * FROM canines WHERE id = \"$id\";";
$conn = new mysqli($host, $login, $password, $database);
$result = mysqli_query($conn, $sql);
$result->data_seek(0);
$row = $result->fetch_assoc();
?>
<div id="profile_photo"><img src="<?php echo $row["image_src"] ?>"/></div>
<h1 id="canine_name"><?php echo htmlentities($row["name"]); ?></h1>
<h4 id="lat_name"><?php echo htmlentities($row["lat_name"]); ?></h4>
<div id="canine_info"><?php echo convert_to_html($row["other_info"]); ?></div>