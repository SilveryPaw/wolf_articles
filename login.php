<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php";?><!--Подключаем метаданные(стили, кодировку)-->
        <script src="<?php echo $GLOBALS["absolute_path"]; ?>/scripts/error_messages.js"></script>
        <script>
            function send_data(login, pword)
            {
                let xhr = new XMLHttpRequest();
                let json = JSON.stringify({
                    "Login": login,
                    "Password": pword
                });
                xhr.open ('POST', "<?php echo $GLOBALS["absolute_path"];?>/scripts/log_user.php");
                xhr.setRequestHeader('Content-type', 'application/json');
                xhr.send(json);

                xhr.onload = function()
                {
                    if(xhr.status != 200)
                    {
                        alert (`Ошибка ${xhr.status}: ${statusText}`);
                    }
                    else
                    {
                        switch(xhr.response)
                        {
                            case "pass":
                                window.location.href = "index.php";
                                break;
                            case "fail":
                                alert ("Ошибка входных данных. Проверьте правильность логина и пароля");
                                break;
                        }
                    }
                }
            }

            function check_data()
            {
                clear_error_messages();
                let iscorrect = true;
                let warning = "* Поле не должно быть пустым";
                let login = document.getElementById("login_block_with_error");
                let password = document.getElementById("password_block_with_error");
                if(login.querySelector("#login").value == "")
                {
                    add_error_message(login, warning);
                    iscorrect = false;
                }
                if(password.querySelector("#password").value == "")
                {
                    add_error_message(password, warning);
                    iscorrect = false;
                }
                if(iscorrect)
                {
                    send_data(login.querySelector("#login").value, password.querySelector("#password").value);
                }
            }
        </script>
    </head>
    <body id="body">
        <?php include_once __DIR__ . "/template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <div class="center_block">
                    <div class="input_form">
                        <h1>Авторизация</h1>
                        <div class="data_block">
                            <div id="login_block_with_error" class="error_possible">
                                <div id="login_block", class="data_input">
                                    <label for="login">Логин</label>
                                    <input id="login" type="text" placeholder="Введите имя пользователя или e-mail"/>
                                </div>
                            </div>
                            <div id="password_block_with_error" class="error_possible">
                                <div id="password_block", class="data_input">
                                    <label for="password">Пароль</label>
                                    <input id="password" type="password" placeholder="Введите пароль"/>
                                </div>
                            </div>
                        </div>
                        <input id="push_data" type="button" value="Войти" onclick="check_data()"/>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>