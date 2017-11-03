<?php  
	require('../func/conexion.php');

	
	$personas = $_GET['personas'];
	$usuarioIDActualizado = $_GET['usuarioIDActualizado'];
	$nombreActualizado = $_GET['nombreActualizado'];
	$emailActualizado  = $_GET['emailActualizado'];
	$usuarioIDEliminado = $_GET['usuarioIDEliminado'];
	$nuevoUsuario = $_GET['nuevoUsuario'];
	$nuevoEmail = $_GET['nuevoEmail'];


	$nombreID = "nombreID";
	$emailID = "emailID";
	$actualizar = "actualizar";
	$borrar = "borrar";
	$table = "";
	$btn = "btn-update-";


	if ($personas === "personas") {
		$resultado = mysqli_query($con, "SELECT * FROM users");

		$table .= "<table class='table table-striped table-hover'>";
		$table .= "<thead class='thead-inverse'>";
		$table .= "<tr>";
		$table .= "<th scope='col' class='text-center'>ID</th>";
		$table .= "<th scope='col' class='text-center'>Nombre</th>";
		$table .= "<th scope='col' class='text-center'>Correo</th>";
		$table .= "<th scope='col' class='text-center'>Editar</th>";
		$table .= "<th scope='col' class='text-center'>Borrar</th>";
		$table .= "</tr>";
		$table .= "</thead>";
		$table .= "<tbody>";

		while ($fila = mysqli_fetch_assoc($resultado)) {
			$table .= "<tr>";
			$table .= "<th scope='row' width='20'>".$fila['id']."</th>";
			$table .= "<td class='text-left' id='".$nombreID.$fila['id']."'>".$fila['name']."</td>";
			$table .= "<td class='text-left' id='".$emailID.$fila['id']."'>".$fila['email']."</td>";
			$table .= "<td class='text-center'>
					   	<button class='btn btn-outline-primary' title='Modificar Datos De ".$fila['name']."' id='".$actualizar.$fila['id']."' 
					   	        onclick='editarUsuario(".$fila['id'].", this)'>
					   		<i class='fa fa-pencil-square-o' aria-hidden='true'></i>
					   	</button>	
			           </td>";

            $table .= "<td class='text-center'>
					   	<button class='btn btn-outline-danger' title='Eliminar A ".$fila['name']."' id='".$borrar.$fila['id']."'
					   			onclick='borrarUsuario(".$fila['id'].")'>
					   		<i class='fa fa-trash-o' aria-hidden='true'></i>
					   	</button>

					   	<button class='btn btn-outline-success' id='".$btn.$fila['id']."' style='display: none;' title='Almacenar Cambios' 
					   			onclick='actualizarUsuario(".$fila['id'].")'>
					   		<i class='fa fa-floppy-o' aria-hidden='true'></i>
					   	</button>
			           </td>";

			$table .= "</tr>";
		}
		$table .= "</tbody></table>";
	}

	echo $table;


	
	if ($personas === "actualizar") {
		if (!empty($nombreActualizado)) {
			$cliente = mysqli_real_escape_string($con, $nombreActualizado);
			$resultado = mysqli_query($con, "UPDATE users SET name = '$nombreActualizado', email = '$emailActualizado' WHERE id = '$usuarioIDActualizado'");

			if ($resultado) {
				echo "Exito";
			}else{
				echo "Error";
			}
			mysqli_close($con);
		}
		
	}

	
	elseif ($personas === "borrar") {
		if (!empty($usuarioIDEliminado)) {
			$resultado = mysqli_query($con, "DELETE FROM users WHERE id = ".$usuarioIDEliminado."");
		}

		mysqli_close($con);
	}

	elseif ($personas === "agregar") {
		if (!empty($nuevoUsuario) && !empty($nuevoEmail)) {
			$resultado = mysqli_query($con, "INSERT INTO users VALUES('', '$nuevoUsuario', '$nuevoEmail')");
		}

		mysqli_close($con);
	}
?>