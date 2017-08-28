<?php
//Cargaremos un archivo externo:
//podemos hacerlo de dos formas:

// include 'funciones.php';

// en el caso de include, si el archivo no se encuentra solo nos dara una advertencia pero el codigo seguira funcionando

// require 'funciones.php';

// en el caso de require, si el archivo no es encontrado nos dara un error fatal y no funcionara el codigo programa 

// include_once 'funciones.php';

//la construccion include_once, hace una verificación para saber si ese archivo ya había sido previamente cargado y en caso de que sea así no lo vuelve hacer

include_once 'funciones.php';
include_once 'funciones.php';


echo '<p>Text from index.php</p>';
sum(10,20);
