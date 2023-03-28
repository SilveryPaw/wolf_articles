<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?><!--Подключаем метаданные(стили, кодировку)-->
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Страничка статей</h1>
                <?php if(isset($_SESSION["Uname"]))
                { ?>
                <a href="article_creation.php">Добавить статью</a>
                <?php } ?>
                <?php include_once "scripts/get_articles.php"; ?>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>