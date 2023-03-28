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
                <div id="recomends_block">
                    <h1>Случайная статья</h1>
                </div>
                <div id="facts_block">
                    <h1>Случайный факт</h1>
                </div>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>