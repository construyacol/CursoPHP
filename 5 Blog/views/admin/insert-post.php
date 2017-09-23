<?php
//creamos una variable result, que nos permitira saber si se inserto bien o mal el blogpost
// include_once '../conexion.php';

// $result=false;
// if (!empty($_POST)) {
//  $sql='INSERT INTO blog_posts (titulo, contenido) VALUES (:titulo, :contenido)';
//  $query = $pdo->prepare($sql);
//  $result = $query->execute([
//  	'titulo' => $_POST['titulo2'],
//  	'contenido' => $_POST['contenido2']
//  	]);
// }
?>

<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<style type="text/css">
	ul{
		display: flex;
    	list-style: none;
	}
	li{
		margin-left: 20px !important;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Titulo</h1>
			</div>
		</div>

		<div class="row">

			<div class="col-md-8">
			<h2>New Posts</h2>
			<p>
			<a class="btn btn-default" href="<?php echo BASE_URL; ?>admin/posts/">Volver</a>
			</p>
			<?php
				if (isset($result) && $result) {
					echo'<div class="alert alert-success">Post guardado</div>';
				}
			?>
				<form method="post">
					<div class="form-group">
					 <label for="inputitulo">Titulo</label>
					 <input type="text" name="titulo2" value="" id="inputitulo">
					</div>
					<textarea class="form-control" name="contenido2" id="inputcontenido" rows="5"></textarea><br>
					<input type="submit" name="guardar">
					
				</form>


			</div>
			<div class="col-md-4">
				Sidebar
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<footer>
				este es el footer<br>
				<a href="<?php echo BASE_URL; ?>admin/">Admin Panel</a>
			</footer>
		</div>
	</div>
</body>
</html>