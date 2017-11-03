<?php
	require('../func/conexion.php');

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	$resultado = mysqli_query($con, "SELECT * FROM users WHERE id = '".$id."'");

	while ($fila  = mysqli_fetch_assoc($resultado)) {
		echo "<div class='row'>
				<div class='col-sm-5'>
					<h5 class='titularOne text-primary text-center'>Nombre:</h5>
				</div>

				<div class='col-sm-7'>
					<h5 class='titularOne text-center'>".$fila['name']."</h5>
				</div>
		      </div>";

      	echo "<div class='row'>
				<div class='col-sm-5'>
					<h5 class='titularOne text-primary text-center'>Correo:</h5>
				</div>

				<div class='col-sm-7'>
					<h5 class='titularOne text-center'>".$fila['email']."</h5>
				</div>
		      </div>";
	}

	mysqli_close($con);
?>