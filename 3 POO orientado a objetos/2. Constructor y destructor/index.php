<?php
//Normalmente el constructor lo utilizamos para inicializar valores o para recibir parametros que vamos a indicarle a nuestro objeto

class Car{


	//Vamos a crear un constructor
	// public function __construct(){
	// 	echo'Construct <br>';
	// }

	//Podriamos darle un valor a una variable desde que construimos el objeto 
	private $owner;


	public function __construct($owner){
		$this->owner = $owner
		echo'Construct <br>';
	}
}
//se ejecutara dos veces el constructor ya que hemos llamado dos veces la misma instancia

$car = new Car('Andrés');
$car2 = new Car('Felipe	');
