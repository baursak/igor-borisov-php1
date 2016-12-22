<h2>Навигация по сайту</h2>
<!-- Меню -->
<!-- Вызов Функции для отрисовки меню -->
<?php
if(!drawMenu($leftMenu, true)){
	// отлавливаем ошибки
    trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR);
}
?>
<!-- Меню -->