<?php
	require ('database.php');

	if (!empty($_POST)) {

		$msg = "";
		$nombre = htmlspecialchars($_POST['nombre']);
		$direccion = htmlspecialchars($_POST['direccion']);
		$telefono = htmlspecialchars($_POST['telefono']);
		$email = htmlspecialchars($_POST['email']);
		$pwd = htmlspecialchars(md5($_POST['pwd']));
		$operacion = $_POST['operacion'];

		
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		if ($operacion == 'insert') {
			$sql = ("INSERT INTO personas (nombre, direccion, telefono, email, contrasenia) VALUES(?, ?, ?, ?, ?)");
			$query = $pdo->prepare($sql);

			if ($query->execute(array($nombre, $direccion, $telefono, $email, $pwd)) == false) {
				$msg = 'Error'. $query->errorCode();
			}else{
				$msg = "Usuario Creado Exitosamente...";
			}
		}

		elseif ($operacion == 'delete') {
			$id = $_POST['id'];
			$sql = ("DELETE FROM personas WHERE id = ?");
			$query = $pdo->prepare($sql);

			if ($query->execute(array($id)) == false) {
				$msg = 'Error'. $query->errorCode();
			}else{
				$msg = "Usuario Eliminado Exitosamente...";
			}
		}

		elseif ($operacion == 'update') {
			$id = $_POST['id'];
			$sql = ("UPDATE personas SET nombre = ?, direccion = ?, telefono = ?, email = ?, contrasenia = ? WHERE id = ?");
			$query = $pdo->prepare($sql);

			if ($query->execute(array($nombre, $direccion, $telefono, $email, md5($pwd), intval($id))) == false) {
				$msg = 'Error'. $query->errorCode();
			}else{
				$msg = "Datos De Usuario Actualizados Exitosamente...";
			}
		}

		Database::disconnect();

		echo $msg;
	}
?>