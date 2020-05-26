<!DOCTYPE html>
<html>
<head>
	<title>Elim</title>
</head>
<body>
	<?php
	$conex= mysqli_connect("localhost", "root", "", "registro")
	or die("Error conex");

	$nombre2=$_POST['name'];
	mysqli_query($conex, "DELETE from consola where nombre='$nombre2'")
	or die("Error elim");

	mysqli_close($conex);
	echo "Datos eliminados correctamente";

	 ?>
	 <a href="Index.html">Back</a>
</body>
</html>