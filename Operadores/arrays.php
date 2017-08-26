<?php

//Operación de union lo hace con base en los indices
$array1 = [
	0 => 'a',
	1 => 'b',
	2 => 'c'
];

$array2 = [
	3 => 'd',
	4 => 'e'
];

$result = $array1 + $array2;
var_dump($result);