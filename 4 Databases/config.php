<?php
//Creamos una conexión, la conexión recibe tres parametros

//Parametro1: el host es donde tenemos nuestra base de datos, puede ser una dirección ip, en este caso es localhost
$dbHost = 'localHost';
$dbName = 'cursophp';
$dbUser = 'root';
$dbPass = '';

try{
		$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",
		$dbUser,
		$dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
	echo $e->getMessage();
}
?>