
<?php

namespace vehiculos;

class vehiculoBase{


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

}

class Car extends vehiculoBase {
	public function move(){
		echo 'Car: moving <br>';
	}
}
class truck extends vehiculoBase {

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
