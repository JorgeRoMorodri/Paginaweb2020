<!DOCTYPE html>
<html>
<head>
	<title>Reg</title>
</head>
<body>
	<?php
	$conex= mysqli_connect("localhost", "root", "", "registro")
	or die("Error conex");

	$consulta= mysqli_query($conex, "SELECT * from consola")
	or die("Error al traer datos");

	echo '<table border = "1">';
	echo '<tr>';
	echo '<th id="ID">ID</th>';
	echo '<th id="nombre">Nombre</th>';
	echo '<th id="email">Email</th>';
	echo '</tr>';

	while($extraido =mysqli_fetch_array($consulta)){
		echo '<tr>';
		echo '<td>'.$extraido['ID'].'</td>';
		echo '<td>'.$extraido['nombre'].'</td>';
		echo '<td>'.$extraido['email'].'</td>';
		echo '</tr>';	
	}

	mysqli_close($conex);
	echo '</table>';

	 ?>
<a href="Index.html">Back</a>
</body>
</html>