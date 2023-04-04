<?php session_start(); ?>
<header id="header_block">
    <div class="menu">
        <ul>
            <li><a href="index.php">WolfArticles</a></li>
            <li><a href="articles.php">Статьи</a></li>
            <li><a href="canines.php">Виды псовых</a></li>
            <li><a href="forum.php">Форум</a></li>
            <li><a href="contacts.php">Контакты</a></li>
        </ul>
        <div id="log_reg">
            <?php if(isset($_SESSION["Uname"]))
            {
            ?>
            <ul>
                <li><a href="profile.php"><?php echo $_SESSION["Uname"] ?></a></li>
                <li><a href="scripts/logout.php">Выйти</a></li>
            </ul>
            <?php
            } else {
            ?>
            <ul>
                <li><a href="login.php">ВХОД</a></li>
                <li><a href="register.php">РЕГИСТРАЦИЯ</a></li>
            </ul>
            <?php } ?>
        </div>
    </div>
</header>