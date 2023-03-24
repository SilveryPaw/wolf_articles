<div class="forums">
    <?php foreach($result as $row)
    {?>
    <div class = "forum">
        <h1><?php echo $row["name"] ?></h1>
        <h3>Создатель: <?php echo $row["author_name"] ?></h3>
    </div>
    <?php } ?>
</div>