<?php
//En este ejemplo vamos hacer un encapsulamiento, lo que logramos con esto es evitar acceder a variables que no queremos consultar o modificar, definiendola de manera privada y llamandola de la siguiente forma
class Car{

	private $owner;

	public function getOwner(){
		return $this->owner;
	}

	//Creamos un metodo (Función) que posteriormente podremos utilizar para dar un valor a $owner
	public function setOwner($owner){
		$this->owner = $owner;
	}
}

$car = new Car();
$car2 = new Car();

//Le damos un valor a owner por medio del metodo setOwner
$car->setOwner('Felipe');
$car2->setOwner('Guevara');

echo'Propietario: ' . $car->getOwner();
echo'<br>Propietario: ' . $car2->getOwner();
