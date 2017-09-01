<?php
$user = null;
$query = null;

if (!empty($_POST)) {
	require_once 'conexion.php';
	$query = "SELECT * FROM usuarios WHERE email =:email AND contrasena = :contrasena";
	$prepared = $pdo->prepare($query);
	$prepared->execute([
		'email'=> $_POST['email'],
		'contrasena' => md5($_POST['contrasena'])
		]);

	$user = $prepared->fetch(PDO::FETCH_ASSOC);	
}
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
		<h1>FakeLogin</h1>
		<a href="lista.php">List Users</a>
		<form action="fakelogin.php" method="post">
				<label for="email">Email</label>
				<input type="text" name="email" id="email">
				<br>
				<label for="contrasena">Contraseña</label>
				<input type="password" name="contrasena" id="contrasena">
				<br>
				<input type="submit" value="Login">
		</form>
		<h2>Query</h2>
		<div>
		<?php
			print_r($query);
		?>
		</div>
		<h2>User data</h2>
		<div>
		<?php
			print_r($user);
			var_dump($user);
		?>
		</div>
	</div>
</body>
</html>