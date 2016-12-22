<?php
require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";
// Menu
// Уcтановка локали и даты
setlocale(LC_ALL, "russian");
$day  = strftime("%d");
$mon  = strftime("%B");
$mon  = iconv("windows-1251", "utf-8", $mon);
$year = strftime("%Y");
/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим к целому числу от 00 до 23
*/
$hour    = (integer) strftime("%H");
$welcome = "";
if ($hour >= 0 && $hour <= 6) {
$welcome = "Доброй ночи";
} elseif ($hour > 6 && $hour <= 12) {
$welcome = "Доброе утро";
} elseif ($hour > 12 && $hour <= 18) {
$welcome = "Добрый день";
} else {
$welcome = "Доброй ночи";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Сайт нашей школы</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
    <div id="header">
        <!-- Верхняя часть страницы -->
        <?php
        require_once "inc/top.inc.php";
        ?>
        <!-- Верхняя часть страницы -->
    </div>
    <div id="content">
        <!-- Заголовок -->
        <h1><?= $welcome ?>, гость. Добро пожаловать на наш сайт!</h1>
        <!-- Заголовок -->
        <!-- Область основного контента -->
        <?php
        require_once "inc/index.inc.php";
        ?>
        <!-- Область основного контента -->
    </div>
    <div id="nav">
        <!-- Навигация -->
        <?php
        require_once "inc/menu.inc.php";
        ?>
        <!-- Навигация -->
    </div>
    <div id="footer">
        <!-- Нижняя часть страницы -->
        <?php
        require_once "inc/bottom.inc.php";
        ?>
        <!-- Нижняя часть страницы -->
    </div>
</body>

</html>