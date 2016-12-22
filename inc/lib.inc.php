<?php
function drawTable($cols = 10, $rows = 10) {
	echo "<table border='1' width='200'>";
	for ($i = 1; $i <= $rows; $i ++):
		echo "<tr>";
		for ($j = 1; $j <= $cols; $j ++):
			if ($i == 1 || $j == 1):
				echo "<th align='center'>" . $i * $j . "</th>";
			else:
				echo "<td align='right'>" . $i * $j . "</td>";
			endif;
		endfor;
		echo "</tr>";
	endfor;
	echo "</table>";
}

function drawMenu($menu, $vertical = true) {
	$style = "";
	if (!$vertical) {
		$style = " style='display: inline; margin-right: 15px'";
	}
	echo "<ul>";
	foreach ($menu as $value):
		echo "<li$style><a href=\"{$value['href']}\">{$value['link']}</a></li>";
	endforeach;
	echo "</ul>";
}