<?php
if(!drawMenu($leftMenu, false)){
    echo "Sorry...";
}
?>
&copy; Супер Мега Веб-мастер, 2000 &ndash;
<?= $year ?>
<p>Powered by<?=$_SERVER["SERVER_SOFTWARE"]?> / PHP<?=PHP_VERSION?> on <?=PHP_OS?></p>
