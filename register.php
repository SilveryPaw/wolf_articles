<!DOCTYPE html>
<html>
    <head>
        <?php include_once "template/meta_data.php" ?><!--Подключаем метаданные(стили, кодировку)-->
        <script>
            function clear_error_messages()
            {
                let warnings = document.getElementsByClassName("warning");
                while(warnings.length>0)
                {
                    warnings[0].remove();
                }

            }

            function add_error_message(block, message)
            {
                let error = document.createElement('div');
                error.className = "warning";
                error.innerHTML = message;
                block.append(error);
            }

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
                        alert(xhr.response);
                    }
                }
            }

            function check_data()
            {
                clear_error_messages();
                let iscorrect = true
                let empty_warning = "Поле не может быть пустым";
                let different_warning = "Пароли не совпадают";
                let user = document.getElementById("uname_block");
                let pw1 = document.getElementById("pw1_block");
                let pw2 = document.getElementById("pw2_block");
                let mail = document.getElementById("mail_block");
                if(user.querySelector("#username").value == "")
                {
                    add_error_message(user, empty_warning);
                    iscorrect = false;
                }
                if(pw1.querySelector("#password-1").value == "")
                {
                    add_error_message(pw1, empty_warning);
                    iscorrect = false;
                }
                else if(pw1.querySelector("#password-1").value != pw2.querySelector("#password-2").value)
                {
                    add_error_message(pw2, different_warning);
                    iscorrect = false;
                }
                if(mail.querySelector("#mail").value == "")
                {
                    add_error_message(mail, empty_warning);
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
        <?php include_once "template/header.php"; ?> <!--Подключаем менюшку-->
        <main id="content_block">
            <div class="content">
                <h1>Регистрация</h1>
                <form id="data_block">
                    <div id="uname_block" class="data_input" >
                        <label for="username">Имя пользователя</label>
                        <input id="username" type="text" placeholder="Введите имя пользователя"/>
                    </div>
                    <div id="pw1_block" class="data_input">
                        <label for="password-1">Пароль</label>
                        <input id="password-1" type="password" placeholder="Введите пароль"/>
                    </div>
                    <div id="pw2_block" class="data_input">
                        <label for="password-1">Повтор пароля</label>
                        <input id="password-2" type="password" placeholder="Повторите пароль"/>
                    </div>
                    <div id="mail_block" class="data_input">
                        <label for="mail">E-mail</label>
                        <input id="mail" type="email" placeholder="Введите электронную почту"/>
                    </div>
                    <input id="push_data" type="button" value="Зарегистрироваться" onclick="check_data()"/>
                </form>
            </div>
        </main>
        <?php include_once "template/footer.php"; ?> <!--Подключаем подвал-->
    </body>
</html>