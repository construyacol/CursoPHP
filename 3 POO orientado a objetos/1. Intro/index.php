<?php
//Las clases estan formadas de propiedades(caracteristicas de un objeto) y metodos (Las acciones que puede hacer)

// en sintesis las propiedades son lo mismo que las variables

//Y los metodos lo mismo que las funciones como en el siguiente ejemplo:

class Car {

//En PHP contamos con 3 metodos de acceso, vamos a utilizar los 2 mas importantes que son: Public y private, private solo deja tener acceso a los datos dentro de la clase
	public $owner;

	public function move(){
		echo'Moving<br>';
	}

}

//Vamos a crear un objeto(Instancia) para utilizar nuestra clase creada

echo 'Class Car <br>'.'<br>';

//Creamos nuestro primer objeto de inicialización de la clase Car y asi poder llamar sus metodos y atributos
$car = new Car();


// llamamos por medio de un apuntador(->) nuestro metodo(funcion) move()
$car->move();
echo'<br>';


//// llamamos por medio de un apuntador(->) nuestro atributo(variable) owner y le asignamos un valor
$car->owner = 'Andrés';
echo'el dueño del carro es: '.$car->owner;
