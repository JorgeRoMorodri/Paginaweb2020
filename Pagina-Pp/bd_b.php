<!DOCTYPE html>
<html>
<head>
	<title>Act</title>
</head>
<body>
	<?php
	$conex= mysqli_connect("localhost", "root", "", "registro")
	or die("Error conex");

	$clave=$_POST['Clave'];
	$nombre=$_POST['name'];
    $email=$_POST['email'];

    mysqli_query($conex, "UPDATE consola set nombre='$nombre' where ID='$clave'")
    or die("Error al actualizar");

    mysqli_query($conex, "UPDATE consola set email='$email' where ID='$clave'")
    or die("Error al actualizar");

    mysqli_close($conex);
    echo "Actualizado";

	 ?>
	 <a href="Index.html">Back</a>
</body>
</html>