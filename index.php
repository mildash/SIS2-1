<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE FORM </title>
	<link rel="stylesheet" type="text/css" href="style.css"></li>
</head>
<body>
	<h1> REGISTRO </h1>
	<form action="index.php" method="post">
		<input type="text" placeholder="Nombre" name="Nombre" required="" oninvalid="this.setCustomValidity('Ingresar Nombre')">
		<input type="text" placeholder="Apellido" name="Apellido" required="" oninvalid="this.setCustomValidity('Ingresar Apellido')">
		<input type="email" placeholder="Email" name="Email" required="" oninvalid="this.setCustomValidity('Ingresar Email')">
		<input type="id" placeholder="Carnet" name="Carnet" required="" oninvalid="this.setCustomValidity('Ingresar Carnet')">

		<div>
			<input type="radio" id="male" name="gender" value="Hombre"><label for="Male">Hombre</label>
			<input type="radio" id="female" name="gender" value="Mujer"><label for="Female">Mujer</label>
		</div>

		<input type="submit" value="Enviar" name="Enviar" >
	</form>
</body>
</html>






<?php
/*	mysql_connect("localhost","root","") or die (mysql_error());
	mysql_select_db("Registro") or die(mysql_error());

	if(isset($_POST['Enviar']))
	{
		$Nombre = $_POST['Nombre'];
		$Apellido = $_POST['Apellido'];
		$Email = $_POST['Email'];
		$Carnet = $_POST['Carnet'];
		$gender = $_POST['gender'];

		$query = "insert into user (Nombre,Apellido,Email,Carnet,gender) 
		values ('$Nombre','$Apellido','$Email','$Carnet','$gender')";
		if(mysql_query($query)){
			echo "<h3>Registro Exitoso!!</h3>";
		}
	}*/
?>
