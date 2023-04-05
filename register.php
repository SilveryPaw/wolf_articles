<!DOCTYPE html>
<html>
    <head>
        <?php include_once __DIR__ . "/template/meta_data.php" ?><!--Подключаем метаданные(стили, кодировку)-->
        <script src="scripts/error_messages.js"></script>
        <script>
            function send_data(name, pword, mail)
            {
                let xhr = new XMLHttpRequest();
                let json = JSON.stringify({
                    "Name": name,
                    "Password": pword,
                    "Email": mail
                });
                xhr.open ('POST', "scripts/reg_user.php");
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
                            case "success":
                                window.location.href = "reg_success.php";
                                break;
                            case "fail":
                                alert("Ошибка регистрации. Пользователь с таким именем или почтой уже зарегистрирован.");
                                break;
                        }
                    }
                }
            }

            function check_data()
            {
                clear_error_messages();
                let iscorrect = true
                let warnings = {"empty": "* Поле не может быть пустым", "different": "* Пароли не совпадают"}
                let user = document.getElementById("uname_block_with_error");
                let pw1 = document.getElementById("pw1_block_with_error");
                let pw2 = document.getElementById("pw2_block_with_error");
                let mail = document.getElementById("mail_block_with_error");
                if(user.querySelector("#username").value == "")
                {
                    add_error_message(user, warnings["empty"]);
                    iscorrect = false;
                }
                if(pw1.querySelector("#password-1").value == "")
                {
                    add_error_message(pw1, warnings["empty"]);
                    iscorrect = false;
                }
                else if(pw1.querySelector("#password-1").value != pw2.querySelector("#password-2").value)
                {
                    add_error_message(pw2, warnings["different"]);
                    iscorrect = false;
                }
                if(mail.querySelector("#mail").value == "")
                {
                    add_error_message(mail, warnings["empty"]);
                    iscorrect = false;
                }

                if(iscorrect)
                {
                    send_data(user.querySelector("#username").value, 
                    pw1.querySelector("#password-1").value,
                    mail.querySelector("#mail").value);
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
                        <h1>Регистрация</h1>
                        <div class="data_block">
                            <div id="uname_block_with_error" class="error_possible">
                                <div id="uname_block" class="data_input" >
                                    <label for="username">Имя пользователя</label>
                                    <input id="username" type="text" placeholder="Введите имя пользователя"/>
                                </div>
                            </div>
                            <div id="pw1_block_with_error" class="error_possible">
                                <div id="pw1_block" class="data_input">
                                    <label for="password-1">Пароль</label>
                                    <input id="password-1" type="password" placeholder="Введите пароль"/>
                                </div>
                            </div>
                            <div id="pw2_block_with_error" class="error_possible">
                                <div id="pw2_block" class="data_input">
                                    <label for="password-1">Повтор пароля</label>
                                    <input id="password-2" type="password" placeholder="Повторите пароль"/>
                                </div>
                            </div>
                            <div id="mail_block_with_error" class="error_possible">
                                <div id="mail_block" class="data_input">
                                    <label for="mail">E-mail</label>
                                    <input id="mail" type="email" placeholder="Введите электронную почту"/>
                                </div>
                            </div>
                        </div>
                        <input id="push_data" type="button" value="Зарегистрироваться" onclick="check_data()"/>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once __DIR__ . "/template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>