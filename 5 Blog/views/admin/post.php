<?php
// include_once '../conexion.php';

// $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
// $query->execute();

// $blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
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
			<h2>Posts</h2>
			<a class="btn btn-primary" href="<?php echo BASE_URL; ?>admin/posts/create">Nuevo Post</a>
			<table class="table">
			<tr>
				<th>Titulo</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
			<?php
			  foreach ($blogPosts as $blogPost) {
			  	echo'<tr><td>'.$blogPost['titulo'].'</td>';
			  	echo "<td>Editar</td>";
			  	echo "<td>Eliminar</td>";
			  	echo "</tr>";
				}
			?>
			</table>


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