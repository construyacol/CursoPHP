<?php
//En este ejemplo vamos hacer un encapsulamiento, lo que logramos con esto es evitar acceder a variables que no queremos consultar o modificar, definiendola de manera privada y llamandola de la siguiente forma
class Car{

	private $owner = 'Andrés';

//desde adentro de una función de nuestra clase si podemos acceder a nuestros metodos o propiedades privadas
	public function getOwner(){

	//la palabra reservada this hará referencia al objeto sobre el cual estamos trabajando
		return $this->owner;
	} 
}

$car = new Car();

echo'Propietario: ' . $car->getOwner();