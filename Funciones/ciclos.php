<?php
//estructuras de condicional PHP

for($i=0; $i<=10; $i++){
	echo $i.'<br>';
}

$i=0;
while ($i<=10){
	echo $i.'<br>';
	$i +=1;
}

//el do a diferencia del while siempre, ejecutara al menos 1 sola vez el codigo dentro de do, asi no cumpla con el condicional

$o=11;

do{
	echo $o.'<br>';
	$o +=1;
} while ($o<=10);

//en esta estructura vamos a recorrer e imprimir una matriz por medio de un ciclo foreach
$names =['Andres','Elizabeth','mary'];
foreach($names as $name){
	echo $name. '<br>';
}

//si queremos leer las llaves o indice de matriz agregamos lo siguiente al codigo:
$names =['Andres','Elizabeth','mary'];
foreach($names as $key => $name){
	echo $key . " - ".$name. '<br>';
}