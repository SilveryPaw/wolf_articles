<?php session_start(); ?>
<header id="header_block">
    <div class="menu">
        <ul>
            <li><a href="/wolf_articles/index.php">WolfArticles</a></li>
            <li><a href="/wolf_articles/articles.php">Статьи</a></li>
            <li><a href="/wolf_articles/canines.php">Виды псовых</a></li>
            <li><a href="/wolf_articles/forum.php">Форум</a></li>
            <li><a href="/wolf_articles/contacts.php">Контакты</a></li>
        </ul>
        <div id="log_reg">
            <?php if(isset($_SESSION["Uname"]))
            {
            ?>
            <ul>
                <li><a href="#"><?php echo $_SESSION["Uname"] ?></a></li>
                <li><a href="/wolf_articles/scripts/logout.php">Выйти</a></li>
            </ul>
            <?php
            } else {
            ?>
            <ul>
                <li><a href="/wolf_articles/login.php">ВХОД</a></li>
                <li><a href="/wolf_articles/register.php">РЕГИСТРАЦИЯ</a></li>
            </ul>
            <?php } ?>
        </div>
    </div>
</header>