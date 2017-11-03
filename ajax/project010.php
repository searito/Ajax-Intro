<?php  
	require "../func/conexion.php";

	$result = mysqli_query($con, "SELECT * FROM users");
	$usuarioBD = "";

	$usuarioBD .= "<div class='table-responsive'>";
	$usuarioBD .= "<table class='table table-hover table-striped'>";
	$usuarioBD .= "<thead class='thead-inverse'>";
	$usuarioBD .= "<tr>";
	$usuarioBD .= "<th class='text-center' width='25'>N°</th>";
	$usuarioBD .= "<th class='text-center'>Nombre</th>";
	$usuarioBD .= "<th class='text-center'>Correo</th>";
	$usuarioBD .= "</tr>";
	$usuarioBD .= "</thead>";

	$usuarioBD .= "<tbody>";

	while ($row = mysqli_fetch_assoc($result)) {
		$usuarioBD .= "<tr>";
		$usuarioBD .= "<th scope='row' class='titularOne'>". $row['id'] ."</th>";
		$usuarioBD .= "<td class='text-left titularOne'>". $row['name'] ."</td>";
		$usuarioBD .= "<td class='text-left titularOne'>". $row['email'] ."</td>";
		$usuarioBD .= "</tr>";
	}

	$usuarioBD .= "</tbody>";

	$usuarioBD .= "</table>";
	$usuarioBD .= "</div>";

	echo($usuarioBD);
	mysqli_close($con);
?>