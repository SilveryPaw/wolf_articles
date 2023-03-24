<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Создание форума</h1>
                <form action="scripts/create_forum.php" method="POST">
                    <div id="name_block">
                        <label for="theme">Тема форума</label>
                        <input id="theme" name="theme" type="text" placeholder="Введите тему"/>
                    </div>
                    <div id="description_block">
                        <label for="descr">Подробное описание</label>
                        <textarea id="descr" name="descr" type="text" placeholder="Введите описание"></textarea>
                    </div>
                    <input type="submit" value="Создать"/>
                </form>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>