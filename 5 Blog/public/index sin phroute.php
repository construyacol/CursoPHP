<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php'
include_once '../conexion.php';
$route = $_GET['route']??'/';

switch ($route) {
	case '/':
		require '../index.php';
		break;
	
	case '/admin':
		require '../admin/index.php';
		break;

	case '/admin/posts':
		require '../admin/post.php';
		break;

}

?>