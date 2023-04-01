<?php
include_once 'scripts/set_edit_data.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Редактор</h1>
                <form action="scripts/<?php echo $info["script"]; ?>" id="edit_entry" method="POST">
                    <div id="name_block">
                        <label for="name"><?php echo $info["name_label"]; ?></label>
                        <input id="name" name="name" type="text" value="<?php echo $info["name"] ?>"/>
                    </div>
                    <div id="text_block">
                        <label for="text"><?php echo $info["text_label"]; ?></label>
                        <textarea id="text" name="text" type="text"><?php echo $info["text"] ?></textarea>
                    </div>
                    <div id="links">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input id="update_button" type="submit" value="Готово"/>
                        <a id="cancel" href="/wolf_articles/profile.php">Отмена</a>
                    </div>
                </form>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>