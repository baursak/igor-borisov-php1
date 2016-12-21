<?php
/*
 * самостоятельно воспроизвести встроенную в PHP функцию count, которая возвращает:
 * количество элементов, если передан массив
 * 0, если передан null
 * 1, если передано что-то другое
 */
function my_count($var) {
	if (is_null($var)) return 0;
	if (!is_array($var)) return 1;
	$counter = 0;
	foreach ($var as $value) $counter++;
	return $counter;
}

/*
 * проверка работы функции
 */
$a = null; // 0
$b = "John"; // 1
$c = [1, 2, 3, "Jane", null, 4.32]; // 6
var_dump(my_count($a));
var_dump(my_count($b));
var_dump(my_count($c));