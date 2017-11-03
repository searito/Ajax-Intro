<?php
	require "../func/conexion.php";

	$nombre = $_POST['nombre'];
	$mail = $_POST['correo'];

	if (empty($nombre) && empty($mail)) {
		echo "<div class='alert alert-danger text-center titularOne' role='alert'>Ingresa Tu Nombre y Correo</div>";
	}
	elseif (empty($nombre)) {
		echo "<div class='alert alert-danger text-center titularOne' role='alert'>Ingresa Tu Nombre</div>";
	}
	elseif (empty($mail) ) {
		echo "<div class='alert alert-danger text-center titularOne' role='alert'>Ingresa Tu Correo Electrónico</div>";
	}else{
		$resultadoBD = mysqli_query($con, "INSERT INTO users VALUES ('', '".$nombre."', '".$mail."')");
		echo "<div class='alert alert-success titularOne text-center text-capitalize' role='alert'>".$nombre." Registrad@ Correctamente...</div>";

		mysqli_close($con);
	}

?>