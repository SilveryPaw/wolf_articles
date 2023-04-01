<div class="forums_block">
    <div class="forums">
        <?php foreach($result as $row)
        {?>
            <div class = "forum">
                <div class="info">
                    <h3><?php echo $row["author_name"]; ?></h3>
                    <p>Последнее сообщение: <?php echo $row["last_message"]; ?>
                </div>
                <div class="name">
                    <a href="/wolf_articles/show_forum.php?id=<?php echo $row["id"]; ?>"><h1><?php echo $row["name"]; ?></h1></a>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php
    $page_name = 'forum';
    include_once 'create_pages.php';
    ?>
</div>