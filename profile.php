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
                <div class="profile_name_block">
                    <h1 id="profile_name"><?php echo $_SESSION["Uname"]; ?></h1>
                    <a id="change_name" href="change_name.php">Изменить</a>
                </div>
                <?php include_once "scripts/create_profile_data.php" ?>
            </div>
            <?php } else { include_once "template/error.php"; } ?>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>