<?php
// $color = 'black';
// if ($color == 'black'){
// 	echo 'color is black';
// }elseif ($color == 'white'){
// 	echo 'el color es blanco';
// }else{
// 	echo 'el color no es black';
// }

$color2 = 'sa';
switch ($color2) {
	case 'blue':
		echo 'color is blue';
		break;
	case 'red':
		echo 'color is red';
		break;
	case 'black':
		echo 'color is negro';
		break;
//el caso default aplica cuando ninguna de las opciones aplica al valor de la variable
	default:
		echo 'No hay color';
		break;
}