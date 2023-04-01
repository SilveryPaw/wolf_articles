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

<div class="articles_block">
    <div class="articles">
        <?php foreach($result as $row)
        {?>
            <div class = "article">
                <div class="article_info">
                    <h4 class="article_author"><?php echo $row["author_name"]; ?></h4>
                    <p class="date_time"><?php echo $row["date_time"]; ?></p>
                </div>
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
            </div>
        <?php } ?>
    </div>
    <?php
    $page_name = 'articles';
    include_once 'create_pages.php'; ?>
</div>