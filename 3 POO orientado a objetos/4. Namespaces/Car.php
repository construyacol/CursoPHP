<?php

namespace vehiculos;

require_once 'vehicleBase.php';

class Car extends vehiculoBase {
	public function move(){
		echo 'Car: moving <br>';
	}
}