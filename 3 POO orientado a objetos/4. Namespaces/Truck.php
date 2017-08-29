<?php

namespace vehiculos;

require_once 'vehicleBase.php';

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