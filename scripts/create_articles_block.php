<?php
function clear_html($text) 
{
    $regex = "/$.*/ms";
    $text = preg_replace($regex, "", $text);//Удаляем всё после первого абзаца
    $regex = "/<.*>/U";
    $text = preg_replace($regex, "", $text);//Удаляем html блоки
    return $text;
}
?>

<div class="articles">
    <?php foreach($result as $row)
    {?>
    <div class = "article">
        <h1><a href="/wolf_articles/show_article.php?id=<?php echo $row["id"]; ?>"><?php echo htmlentities($row["name"]) ?></a></h1>
        <p><?php 
        $art_text = clear_html($row["article_text"]);
        if(strlen($art_text) > 1000)
        {
            echo mb_strimwidth($art_text, 0, 1000, "...");
        }else{
            echo $art_text;
        }
        ?></P>
        <h6>Автор статьи: <?php echo $row["author_name"]; ?></h6>
    </div>
    <?php } ?>
</div>