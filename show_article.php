<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <article class="content">
                <?php include_once 'scripts/create_article_page.php' ?>
            </article>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>