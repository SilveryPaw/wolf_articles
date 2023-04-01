<div class="messages">
    <?php foreach($result as $row)
    {?>
    <div class = "message">
        <div class="message_info">
            <h1 class="comment_name"><?php echo $row["author_name"]; ?></h1>
            <p class="comment_date"><?php echo $row["date_time"]; ?></p>
        </div>
        <p class="comment_message"><?php echo $row["message"]; ?></p>
    </div>
    <?php } ?>
</div>