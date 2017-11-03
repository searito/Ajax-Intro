<?php
	include_once('../func/conexion.php');

	if (isset($_GET['nombre'])) {
		$nombre = $_GET['nombre'];
	}

	if (!empty($nombre)) {
		$usuario = mysqli_real_escape_string($con, $nombre);
		$resultado = mysqli_query($con, "SELECT * FROM users WHERE name LIKE '%".$usuario."%'");
		$numeroResultados = mysqli_num_rows($resultado);

		if ($numeroResultados === 0) {
			echo "<div class='alert alert-danger text-center titularOne' role='alert'>La Busqueda No Dio Resultados...</div>";
		}else{
			while ($fila  = mysqli_fetch_assoc($resultado)) {
				echo "<div class='alert alert-info text-center titularOne cursor' role='alert' data-toggle='modal' onclick='getId(this)'
						   data-target='#modalUsuarios' data-id='".$fila['id']."'>".$fila['name']." </div>";

				echo "<input type='hidden' value='".$fila['email']."'>";
			}
			mysqli_close($con);
		}
	}else{
		mostrarUsuarios();
	}

	

	function mostrarUsuarios(){
		require('../func/conexion.php');

		$resultado = mysqli_query($con, "SELECT * FROM users");

		while ($fila  = mysqli_fetch_assoc($resultado)) {
			echo "<div class='alert alert-info text-center titularOne cursor' role='alert' data-toggle='modal' onclick='getId(this)'
				       data-target='#modalUsuarios' data-id='".$fila['id']."'>".$fila['name']." </div>";

			echo "<input type='hidden' value='".$fila['email']."'>";
		}

		mysqli_close($con);
	}
?>