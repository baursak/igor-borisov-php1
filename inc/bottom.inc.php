<?php
if(!drawMenu($leftMenu, false)){
	// отлавливаем ошибки
	trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR);
}
?>
&copy; Супер Мега Веб-мастер, 2000 &ndash;
<?= $year ?>
<p>Powered by<?=$_SERVER["SERVER_SOFTWARE"]?> / PHP<?=PHP_VERSION?> on <?=PHP_OS?></p>
