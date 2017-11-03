<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];

	if (empty($nombre) && empty($apellido)) {
		echo "<div class='alert alert-danger text-center' role='alert'>Por Favor Ingresa Tu Nombre Y Apellido...</div>";
	}
	elseif (empty($nombre)) {
		echo "<div class='alert alert-danger text-center' role='alert'>Por Favor Ingresa Tu Nombre...</div>";
	}
	elseif (empty($apellido)) {
		echo "<div class='alert alert-danger text-center' role='alert'>Por Favor Ingresa Tu Apellido...</div>";
	}
	else{
		echo "<div class='alert alert-success text-center' role='alert'>Hola ". $nombre ." ". $apellido."...!!!</div>";
	}
?>