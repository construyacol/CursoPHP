<?php

include_once 'conexion.php';

if (!empty($_POST)) { //hacer actualización de datos por medio de post
	
	$ID = $_POST['id'];
	$NNOMBRE = $_POST['nombre'];
	$NAPELLIDO = $_POST['apellido'];
	$NDIRECCION = $_POST['direccion'];
	$NEMAIL = $_POST['email'];
	$NTELEFONO = $_POST['telefono'];


	$sql = "UPDATE usuarios  SET nombre=:nombre, apellido=:apellido, direccion=:direccion, email=:email, telefono=:telefono WHERE id=:id"; //Escribimos el sql de la consulta del usuario por su id
	$query = $pdo->prepare($sql); //Preparamos la consulta por pdo

	$query->execute([//Co-relacionamos el criterio de envio "SET" del sql

		'id' => $ID,
		'nombre' => $NNOMBRE,
		'apellido' => $NAPELLIDO,
		'direccion' => $NDIRECCION,
		'email' => $NEMAIL,
		'telefono' => $NTELEFONO

		]);

	$VNOMBRE = $NNOMBRE;
	$VAPELLIDO = $NAPELLIDO;
	$VDIRECCION = $NDIRECCION;
	$VEMAIL = $NEMAIL;
	$VTELEFONO = $NTELEFONO;




} else {


$ID = $_GET['id'];
// var_dump($id);
$sql = "SELECT * FROM usuarios WHERE id=:id"; //Escribimos el sql de la consulta del usuario por su id
$query = $pdo->prepare($sql); //Preparamos la consulta por pdo

$result = $query->execute([ //Concatenamos o relacionamos el criterio de consulta del sql
		'id' => $ID
	]);

$row = $query->fetch(PDO::FETCH_ASSOC); //Hacemos la consulta
//Extraemos los valores de la consulta realizada
$VNOMBRE = $row['nombre'];
$VAPELLIDO = $row['apellido'];
$VDIRECCION =$row['direccion']; 
$VEMAIL =$row['email'];
$VTELEFONO =$row['telefono'];
var_dump($VTELEFONO);

}


?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Actualizar Usuario</h1>
		<a href="lista.php">Lista usuarios</a>

		<?php
		// if($result){
		// echo'<div class="alert alert-success">Success</div>';
		// }
		?>
		
		<form action="actualiza.php" method="post">
			<div>
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" value="<?php echo $VNOMBRE; ?>">
				<br>
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" id="apellido"  value="<?php echo $VAPELLIDO; ?>">
				<br>
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" id="direccion"  value="<?php echo $VDIRECCION; ?>">
				<br>
				<label for="telefono">Telefono</label>
				<input type="number" name="telefono" id="telefono"  value="<?php echo $VTELEFONO; ?>">
				<br>
				<label for="email">Email</label>
				<input type="text" name="email" id="email"  value="<?php echo $VEMAIL; ?>">

<!-- 				<br>
				<label for="contrasena">Contraseña</label>
				<input type="password" name="contrasena" id="contrasena"  value="<?php echo $VNOMBRE; ?>"> -->
				<br>
				<input type="hidden" name="id" value="<?php echo $ID; ?>">
				<input type="submit" value="Actualizar"  >
			</div>
		</form>
		
	</div>

</body>
</html>