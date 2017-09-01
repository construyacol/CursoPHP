<?php
//llamamos el archivo config.php que establece la conexión con la base de datos
require_once 'conexion.php';

//vamos hacer una consulta para traer todos los datos que tenemos en la bd
$queryResult = $pdo->query("SELECT * FROM usuarios");

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
		<h1>List users</h1>
		<a href="registrUsuario.php">añadir usuario</a>

	<table class="table">
		<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Dirección</th>
				<th>Contraseña</th>
				<th>Numero</th>
				<th>Email</th>
				<th>Actualizar</th>
				<th>Borrar</th>
		</tr>
		<?php
		//Creamos un bucle que consulte dato por dato dentro de la base de datos
			while($row = $queryResult->fetch(PDO::FETCH_BOTH)){

				// echo'<br>';
				// var_dump($row);
				// echo'<br>';

				echo'<tr>';
				echo'<td>'.$row['nombre'].'</td>';
				echo'<td>'.$row['apellido'].'</td>';
				echo'<td>'.$row['direccion'].'</td>';
				echo'<td>'.$row['contrasena'].'</td>';
				echo'<td>'.$row['telefono'].'</td>';
				echo'<td>'.$row['email'].'</td>';
				echo'<td><a href="actualiza.php?id='.$row['id'].'">Editar</a></td>';
				echo'<td><a href="borrar.php?id='.$row['id'].'">Borrar</a></td>';
				echo'</tr>';

			}
		?>
	</table>		
	</div>
</body>
</html>