<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php" ?><!--Подключаем метаданные(стили, кодировку)-->
    </head>
    <body id="body">
        <?php include_once __DIR__ . "/template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <div class="page_name"><h1>Статьи</h1></div>
                <?php if(isset($_SESSION["Uname"]))
                { ?>
                <div id="create_article">
                    <a href="article_creation.php">Добавить статью</a>
                </div>
                <?php } 
                $page = 1;
                if(isset($_GET["page"]))
                {
                    $page = $_GET["page"];
                } ?>
                <?php include_once __DIR__ . "/scripts/get_articles.php"; ?>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>