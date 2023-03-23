<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php";?><!--Подключаем метаданные(стили, кодировку)-->
        <script src="scripts/error_messages.js"></script>
        <script>
            function send_data(login, pword)
            {
                let xhr = new XMLHttpRequest();
                let json = JSON.stringify({
                    "Login": login,
                    "Password": pword
                });
                xhr.open ('POST', "scripts/log_user.php");
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
                let warning = "Поле не должно быть пустым";
                let login = document.getElementById("login_block");
                let password = document.getElementById("password_block");
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
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <form class="content">
                <h1>Авторизация</h1>
                <div class="data_block">
                    <div id="login_block">
                        <label for="login">Логин</label>
                        <input id="login" type="text" placeholder="Введите имя пользователя или e-mail"/>
                    </div>
                    <div id="password_block">
                        <label for="password">Пароль</label>
                        <input id="password" type="password" placeholder="Введите пароль"/>
                    </div>
                    <input id="push_data" type="button" value="Войти" onclick="check_data()"/>
                </div>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>