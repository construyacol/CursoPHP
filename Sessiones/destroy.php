<?php

//Vamos a eliminar los datos que alojamos en 'count' dentro de $_SESSION
session_start();

//por medio de unset podremos eliminar datos alojados dentro del arreglo - matriz
unset($_SESSION['count']);

//con session_destroy eliminamos totalmente la session, se recomienda usar para el logout
// session_destroy();

echo'Hemos eliminado esta shit';