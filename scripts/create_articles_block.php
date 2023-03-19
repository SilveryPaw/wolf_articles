<div class="articles">
    <?php foreach($result as $row)
    {?>
    <div class = "article">
        <h1><?php echo $row["name"] ?></h1>
        <p><?php 
        if(strlen($row["article_text"]) > 1000)
        {
            echo mb_strimwidth($row["article_text"], 0, 1000, "...");
        }else{
            echo $row["article_text"];
        }
        ?></P>
        <h6>Автор статьи: <?php echo $row["author_name"]; ?></h6>
    </div>
    <?php } ?>
</div>