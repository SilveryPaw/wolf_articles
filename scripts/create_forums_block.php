<div class="forums">
    <?php foreach($result as $row)
    {?>
    <div class = "forum">
        <h1><a href="/wolf_articles/show_forum.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></h1>
        <h3>Создатель: <?php echo $row["author_name"]; ?></h3>
        <p>Последнее сообщение: <?php echo $row["last_message"]; ?>
    </div>
    <?php } ?>
</div>