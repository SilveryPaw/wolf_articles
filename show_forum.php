<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <?php include_once 'scripts/get_forum_theme.php'; ?>
                <?php include_once 'scripts/get_forum_messages.php'?>
                <?php if(isset($_SESSION["Uname"])){ ?>
                    <form method="POST" class="send_message" action="scripts/send_message_to_forum.php?id=<?php echo $_GET["id"]; ?>">
                        <textarea name="message" placeholder="Введите сообщение"></textarea>
                        <input type="submit"></input>
                    </form>
                <?php }else{?>
                    <p>Оставлять сообщения могут только <a href="login.php">авторизированные</a> пользователи</p>
                <?php } ?>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>