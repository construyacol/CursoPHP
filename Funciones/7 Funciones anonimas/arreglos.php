<?php

$numbers = [1, 2, 3, 4, 5];


//En este caso lo que estamos haciendo es recorrer completamente el arreglo utilizando array_map, y a cada uno de los indices(llaves, posiciones) se les aplicara la función anónima y el resultado se almacenara en la variable array $result : 

$result = array_map(function($n){
	return $n * 2;
}, $numbers);

var_dump($result);
echo'<br>';

//en este otro ejemplo queremos reemplazar el 2 fijo que multiplica a cada uno de los indices  por el valor contenido en una variable:
$x=3;

$result2 = array_map(function($n) use ($x){
	return $n * $x;
}, $numbers);

var_dump($result2);