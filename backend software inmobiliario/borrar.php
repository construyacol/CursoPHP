<?php
include_once 'conexion.php';

$ID = $_GET['id'];

$sql = 'DELETE FROM usuarios WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute([
	'id'=>$ID
	]);

header("Location:lista.php");
