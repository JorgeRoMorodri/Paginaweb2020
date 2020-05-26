<!DOCTYPE html>
<html>
<head>
	<title>Registar</title>
</head>
<body>
	<?php
	$conex= mysqli_connect("localhost", "root", "", "registro")
	or die("Error 404");

    $clave=$_POST['Clave'];
	$nombre=$_POST['name'];
    $email=$_POST['email'];

    $insertar="INSERT into consola values ('$nombre', '$email', '$clave')";

    $resultado= mysqli_query($conex, $insertar)
    or die("Error insertar");

    mysqli_close($conex);
    echo "Datos correctos";

	 ?>
<a href="Index.html">Back</a>
</body>
</html>