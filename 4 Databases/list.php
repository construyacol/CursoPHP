<?php
//llamamos el archivo config.php que establece la conexión con la base de datos
require_once 'config.php';

//vamos hacer una consulta para traer todos los datos que tenemos en la bd
$queryResult = $pdo->query("SELECT * FROM users");

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
		<a href="index.php">home</a>
	<table class="table">
		<tr>
				<th>Name</th>
				<th>Email</th>
		</tr>
		<?php
		//Creamos un bucle que consulte dato por dato dentro de la base de datos
			while($row = $queryResult->fetch(PDO::FETCH_BOTH)){

				echo'<tr>';
				echo'<td>'.$row['name'].'</td>';
				echo'<td>'.$row['email'].'</td>';
				echo'</tr>';

			}
		?>
	</table>		
	</div>
</body>
</html>