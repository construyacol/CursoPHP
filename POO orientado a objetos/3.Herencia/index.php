<?php
//La herencia es un proceso que nos ayuda a reutilizar codigo, por medio de una herencia podemos hacer que los objetos de una clase obtengan propiedades y metodos que tendria los objetos de otra clase




class vehiculo{


	private $owner;


	public function __construct($owner){
		$this->owner = $owner;
		echo'Construct <br>';
	}

	public function getOwner(){
		return $this->owner;
	}

	public function move(){
		echo 'Vehiculo: moving <br>';
	}

	// public function setOwner($owner){
	// 	$this->owner = $owner;
	// }
}

//Vamos a heredar las propiedades y metodos de vehiculo a la clase Car de la siguiente forma:
class Car extends vehiculo {
	public function move(){
		echo 'Car: moving <br>';
	}
}
class truck extends vehiculo {

	private $type;


	public function __construct($owner, $type){
		$this->type = $type;
		parent::__construct($owner);
	}
	public function move(){
		echo 'Truck '.$this->type.': moving <br>';
	}

}

echo'<br>Clase Car: <br>';
$car = new Car('Andrés');
$car->move();
echo'<br>Propietario de carro: ' . $car->getOwner();


echo'<br>Clase Truck: <br>';
$truck = new truck('Felipe', 'Pickup');
$truck->move();
echo'<br>Propietario de truck: ' . $truck->getOwner();
