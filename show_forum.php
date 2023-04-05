<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php" ?>
    </head>
    <body id="body">
        <?php include_once __DIR__ . "/template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <div id="forum_block">
                    <div>
                        <?php include_once __DIR__ . '/scripts/get_forum_theme.php'; ?>
                        <?php include_once __DIR__ . '/scripts/get_forum_messages.php'?>
                    </div>
                    <div id="send_message">
                        <?php if(isset($_SESSION["Uname"])){ ?>
                            <form method="POST" action="scripts/send_message_to_forum.php?id=<?php echo $_GET["id"]; ?>">
                                <textarea name="message" placeholder="Введите сообщение"></textarea>
                                <input id="send_button" type="submit"></input>
                            </form>
                        <?php }else{?>
                            <p>Оставлять сообщения могут только <a href="login.php">авторизированные</a> пользователи</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>