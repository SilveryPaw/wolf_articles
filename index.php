<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <div id="about_block">
                    <h1>О сайте</h1>
                    <p>Сайт WolfArticles хранит различные статьи, а также описание и характеристики различных видов псовых. Работа проведена с целью ознакомления и закрепления навыков web-разработки</p>
                </div>
                <div id="article_block">
                    <h1>Случайная статья</h1>
                    <?php $table = "articles";
                    include 'scripts/get_random_entry.php'?>
                </div>
                <div class="forum_block">
                    <h1>Случайный форум</h1>
                    <?php $table = "forums";
                    include 'scripts/get_random_entry.php'?>
                </div>
                <div id="facts_block">
                    <h1>Случайный факт</h1>
                    <?php $table = "facts";
                    include 'scripts/get_random_entry.php'?>
                </div>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>