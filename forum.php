<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Форум</h1>
                <?php if(isset($_SESSION["Uname"]))
                { ?>
                <div id="create_forum">
                    <a href="forum_creation.php">Создать форум</a>
                </div>
                <?php } 
                $page = 1;
                if(isset($_GET["page"]))
                {
                    $page = $_GET["page"];
                }
                include_once "scripts/get_forums.php"; ?>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>