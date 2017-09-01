
<?php
require_once 'conexion.php';
$result = false;
// var_dump($_POST);

if(!empty($_POST)){
	$NOMBRE = $_POST['nombre'];
	$APELLIDO = $_POST['apellido'];
	$DIRECCION = $_POST['direccion'];
	$CONTRASENA = md5($_POST['contrasena']);
	$EMAIL = $_POST['email'];
	$TELEFONO = $_POST['telefono'];


	$sql = "INSERT INTO usuarios(nombre, apellido, direccion, telefono, email, contrasena) VALUES (:nombre, :apellido, :direccion, :telefono, :email, :contrasena)";

	$query = $pdo->prepare($sql);

	$result = $query->execute([
		'nombre' => $NOMBRE,
		'apellido' => $APELLIDO,
		'direccion' => $DIRECCION,
		'telefono' => $TELEFONO,
		'email' => $EMAIL,
		'contrasena' => $CONTRASENA
	]);

	var_dump($result);
}

?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h1>Add User</h1>
		<a href="lista.php">Lista usuarios</a>


		<?php
		if($result){
		echo'<div class="alert alert-success">Success</div>';
		}
		?>
		
		<form action="registrUsuario.php" method="post">
			<div>
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre">
				<br>
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" id="apellido">
				<br>
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" id="direccion">
				<br>
				<label for="telefono">Telefono</label>
				<input type="number" name="telefono" id="telefono">
				<br>
				<label for="email">Email</label>
				<input type="text" name="email" id="email">
				<br>
				<label for="contrasena">Contraseña</label>
				<input type="password" name="contrasena" id="contrasena">
				<br>
				<input type="submit" value="Enviar">
			</div>
		</form>
		
	</div>

</body>
</html>