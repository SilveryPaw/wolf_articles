<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Страничка псовых</h1>
                <?php include_once "scripts/get_canines.php"; ?>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>