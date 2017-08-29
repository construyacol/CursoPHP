<?php

include 'Car.php';
include 'Truck.php';

echo'<br>Clase Car: <br>';
$car = new Car('Andrés');
$car->move();
echo'<br>Propietario de carro: ' . $car->getOwner();


echo'<br>Clase Truck: <br>';
$truck = new truck('Felipe', 'Pickup');
$truck->move();
echo'<br>Propietario de truck: ' . $truck->getOwner();