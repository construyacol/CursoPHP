<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once '../conexion.php';

$baseUrl= '';
//LLamar toda la raiz
// $baseDir = $_SERVER['SCRIPT_NAME'];

//Llamar solo la raiz de nuestra ruta
// $baseDir = basename($_SERVER['SCRIPT_NAME']);

//Para reemplazar la cadena hacemos lo siguiente:
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER{'SCRIPT_NAME'} );

$baseUrl = 'http://'. $_SERVER['HTTP_HOST'].$baseDir;

define( 'BASE_URL', $baseUrl);
// var_dump($baseUrl);

$route = $_GET['route']??'/';


function render($fileName, $params = []){
	ob_start();
	extract($params);
	include $fileName;


	return ob_get_clean();
}

//empezamos definiendo rutas con RouteCollector
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

//enrutador de views/admin/posts.php
$router->get('/admin/posts', function() use ($pdo){

	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

	return render('../views/admin/post.php', ['blogPosts' => $blogPosts]);	
});

//enrutador de views/admin/insert-posts.php

$router->get('/admin/posts/create', function() use ($pdo){


	return render('../views/admin/insert-post.php');	

});


$router->post('/admin/posts/create', function() use ($pdo){

 $sql='INSERT INTO blog_posts (titulo, contenido) VALUES (:titulo, :contenido)';
 $query = $pdo->prepare($sql);
 $result = $query->execute([
 	'titulo' => $_POST['titulo2'],
 	'contenido' => $_POST['contenido2']
 	]);
	
	return render('../views/admin/insert-post.php', ['result' => $result]);	

});

//Enrutador de index.php
$router->get('/',function() use ($pdo){

$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

return render('../views/index.php', ['blogPosts' => $blogPosts]);

});

//Enrutador de admin.php
$router->get('/admin',function() use ($pdo){

return render('../views/admin/index.php');

});


//Tenemos que utilizar un dispatcher
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//Generamos una respuesta que es lo que regresa el dispatcher

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;