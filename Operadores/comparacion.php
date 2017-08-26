<?php

$v1 = 8;
$v2 = 10;

//Obtendremos un valor booleano true: en caso que los valores sean iguales y false: en caso que los valores sean diferentes
// $result = $v1 == $v2;



//$result = $v1 === $v2; //nos permite compara tanto el valor como el tipo de dato, que sean completamente iguales

//$result = $v1 != $v2; //comparador diferente (si son diferentes es verdadero)


$result = $v1 <=> $v2; // compara si un numero es mayor(1), menor(-1) o igual(0)

var_dump($result);
