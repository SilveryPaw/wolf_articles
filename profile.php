<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <?php if(isset($_SESSION["Uname"])) {?>
            <div class="content">
                <h1><?php echo $_SESSION["Uname"]; ?></h1>
                <?php include_once "scripts/create_profile_data.php" ?>
            </div>
            <?php } else { include_once "template/error.php"; } ?>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>