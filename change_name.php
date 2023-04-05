<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once __DIR__ . "/template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <form class="center_block" method="POST" action="<?php echo $GLOBALS["absolute_path"];?>/scripts/update_name.php">
                    <div class="border">
                        <h1>Изменить имя</h1>
                        <label for="new_name">Новое имя пользователя</label>
                        <input type="text" id="new_name" name="new_name" placeholder="Введите новое имя пользователя"/>
                        <input type="submit" id="change_name_button" value="Изменить"/>
                    </div>
                </form>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>