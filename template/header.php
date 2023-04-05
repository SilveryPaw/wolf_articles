<?php session_start(); ?>
<header id="header_block">
    <div class="menu">
        <ul>
            <li><a href="<?php echo $GLOBALS["absolute_path"];?>/index.php">WolfArticles</a></li>
            <li><a href="<?php echo $GLOBALS["absolute_path"];?>/articles.php">Статьи</a></li>
            <li><a href="<?php echo $GLOBALS["absolute_path"];?>/canines.php">Виды псовых</a></li>
            <li><a href="<?php echo $GLOBALS["absolute_path"];?>/forum.php">Форум</a></li>
            <li><a href="<?php echo $GLOBALS["absolute_path"];?>/contacts.php">Контакты</a></li>
        </ul>
        <div id="log_reg">
            <?php if(isset($_SESSION["Uname"]))
            {
            ?>
            <ul>
                <li><a href="<?php echo $GLOBALS["absolute_path"];?>/profile.php"><?php echo $_SESSION["Uname"] ?></a></li>
                <li><a href="<?php echo $GLOBALS["absolute_path"];?>/scripts/logout.php">Выйти</a></li>
            </ul>
            <?php
            } else {
            ?>
            <ul>
                <li><a href="<?php echo $GLOBALS["absolute_path"];?>/login.php">ВХОД</a></li>
                <li><a href="<?php echo $GLOBALS["absolute_path"];?>/register.php">РЕГИСТРАЦИЯ</a></li>
            </ul>
            <?php } ?>
        </div>
    </div>
</header>