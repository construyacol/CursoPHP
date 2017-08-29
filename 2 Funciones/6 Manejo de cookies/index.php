<?php
//las cookies es la manera para almacenar información en el navegador del cliente, en javascript es local storage

//set coockie recibe 3 parametros: 1. Nombre de la cookie, 2. valor el cual tiene que ser una cadena, 3. tiempo de vida ej:
// setcookie('nombre','value', time() + 60);

//En la siguiente cookie vamos a contar el numero de veces en que nuestro usuario visita nuestra pagina

setcookie('count','1', time() + 3600);
echo'Cookies';
