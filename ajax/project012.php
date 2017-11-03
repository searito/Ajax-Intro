<?php
	include_once('../func/conexion.php');

	$nombre = $_GET['nombre'];

	if (!empty($nombre)) {
		$persona = mysqli_real_escape_string($con, $nombre);
		$resultadoBD = mysqli_query($con, "SELECT * FROM users WHERE name LIKE '%".$persona."%'");
		$numeroResultados = mysqli_num_rows($resultadoBD);

		if ($numeroResultados === 0) {
			echo "<div class='alert alert-danger text-center titularOner'>
					<i class='fa fa-user-times'></i> Persona No Econtrada <i class='fa fa-user-times'></i>
				  </div>";
		}else{
			while ($fila = mysqli_fetch_array($resultadoBD)) {
				echo "<div class='alert alert-success titularOne text-center' role='alert'>".$fila['name']."</div>";
			}
		}

		mysqli_close($con);
	}
?>