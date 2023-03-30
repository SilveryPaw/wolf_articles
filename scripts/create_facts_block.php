<?php
$result->data_seek(0);
$row = $result->fetch_assoc();
?>
<div class = "fact">
    <p><?php echo $row["fact"]; ?></p>
<div>