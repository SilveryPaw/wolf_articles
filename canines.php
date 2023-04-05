<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once __DIR__ . "/template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Страничка псовых</h1>
                <?php 
                $page = 1;
                if(isset($_GET["page"]))
                {
                    $page = $_GET["page"];
                }
                include_once __DIR__ . "/scripts/get_canines.php"; ?>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>