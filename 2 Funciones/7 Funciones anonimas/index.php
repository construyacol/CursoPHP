<?php
//Para poder llamar las funciones anonimas debemos asignarselas a una variable

$variable2 = 1;
$variable = function () {

		echo'This is a closure';


	//un punto importante a tener en cuenta es que el scope o resultado que se genera dentro de la funcion anonima no esta contemplado en el scope global de fuera ej:

	echo'variable2: '.$variable2;

	//variable2 esta definido dentro el scope global pero no dentro de la funcion para arreglar esto podemos hacer lo siguiente
};

$variable();

//agregaremos la variable al scope de la funcion anonima:

$variable = function () use ($variable2) {

	echo'variable2: '.$variable2;

};