<?php
//El uso de funciones se divide en dos partes, la primera es la declaración de una funcion, definicion, nombre contenido y la segunda parte es el llamado de la funcion, ejecución

//declaracion
function hello(){
	echo 'hello';
	echo '<br>';
};

//Llamado de la funcion

hello();

//Funciones con parametros:
//Llamado
function hola($name){
	echo 'hello ' . $name;
	echo '<br>';
};

//en este caso la funcion siempre sera llamada con un parametro

hola(' andres');

//Declaramos nuevamente una funcion con parametros para ejecutar una operación:

function sum($a, $b){
//Utilizamos el return para sacar el resultado de la funcion y mostrarlo por fuera
	return $a + $b;
}
$c = sum(1, 2);
var_dump($c);