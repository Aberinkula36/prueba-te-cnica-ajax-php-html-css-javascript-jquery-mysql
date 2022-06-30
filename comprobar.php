<?php

	$user = "root";
	$password = "";
	$database = "ajax";

	$conexion = mysqli_connect("localhost", $user, $password, $database) or die ('no se puede conectar a la base de datos'.mysqli_error($conexion));

	$email = $_POST['email'];
	$password = $_POST['password'];

	$consulta = "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'";

	$resultado = mysqli_query($conexion, $consulta);

	$filas = mysqli_num_rows($resultado);

	if ($filas > 0) {
		echo "Usuario correcto";
	}else{
		echo "Usuario incorrecto";
	}

	mysqli_free_result($resultado);

?>