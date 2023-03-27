<div class="messages">
    <?php foreach($result as $row)
    {?>
    <div class = "message">
        <h1 class="comment_name"><?php echo $row["author_name"]; ?></h1>
        <p class="comment_message"><?php echo $row["message"]; ?></p>
        <p class="comment_date"><?php echo $row["date_time"]; ?></p>
    </div>
    <?php } ?>
</div>