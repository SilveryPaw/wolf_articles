<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once __DIR__ . "/template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Создание статьи</h1>
                <form action="<?php echo $GLOBALS["absolute_path"]; ?>/scripts/create_article.php" id="article_creation" method="POST">
                    <div id="name_block">
                        <label for="name">Название статьи</label>
                        <input id="name" name="name" type="text" placeholder="Введите название статьи"/>
                    </div>
                    <div id="text_block">
                        <label for="text">Текст статьи</label>
                        <textarea id="text" name="text" type="text" placeholder="Введите текст статьи"></textarea>
                    </div>
                    <input id="create_button" type="submit" value="Создать"/>
                </form>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>