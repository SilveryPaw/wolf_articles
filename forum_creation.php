<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once __DIR__ . "/template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Создание форума</h1>
                <form id="forum_creation" action="<?php echo $GLOBALS["absolute_path"]; ?>/scripts/create_forum.php" method="POST">
                    <div id="name_block">
                        <label for="theme">Тема форума</label>
                        <input id="theme" name="theme" type="text" placeholder="Введите тему"/>
                    </div>
                    <div id="description_block">
                        <label for="descr">Подробное описание</label>
                        <textarea id="descr" name="descr" type="text" placeholder="Введите описание"></textarea>
                    </div>
                    <input id="create_button" type="submit" value="Создать"/>
                </form>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>