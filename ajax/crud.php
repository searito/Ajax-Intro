<?php  
	$operacion = '';

	require('../func/database.php');

	$nombre = ''; 
	$direccion = '';
	$telefono = '';
	$email = ''; 
	$pwd = '';

	if (!empty($_POST)) {
		$operacion = $_POST['operacion'];

		if ($operacion == 'update') {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$id = $_POST['id'];

			$sql = ("SELECT * FROM personas WHERE id = ?");
			$query = $pdo->prepare($sql);
			$query->execute(array($id));
			$data = $query->fetch(PDO::FETCH_ASSOC);

			$nombre = $data['nombre'];
			$direccion = $data['direccion'];
			$telefono = $data['telefono'];
			$email = $data['email'];
			$pwd = $data['contrasenia'];
		}
	}
?>


<style>
	.div_usu{
		position: relative;
		top: 10px;
		/*left: 10px;*/
		width: 50%;
		margin-left: 25%;
	}

	.div_info{
		left: 450px;
		position: absolute;
		top: 380px;
	}
</style>

<div class="div_usu">
	
	<form id="formulario" class="" role="form">
		<div id="alerta" class="alert alert-danger" role="alert"></div>

		<?php
			if ($operacion == 'update') {
				echo "<div class='form-group'>
				  	  	  <label>ID: </label>
				  	  	  <input type='text' name='id' value=".$id." class='form-control' disabled id='id'>
				      </div>";
			}
		?>

		<div class="form-group">
			<label for="">Nombre:</label>
			<input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>" placeholder="Juan Alvarado" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="">Dirección:</label>
			<input type="text" name="direccion" id="direccion" value="<?php echo $direccion ?>" placeholder="Col. Chaparrastique" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="">Número De Teléfono:</label>
			<input type="text" name="telefono" id="telefono" value="<?php echo $telefono ?>" placeholder="0000-0000" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="">Email:</label>
			<input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>" placeholder="correo@correo.com" required>
		</div>

		<div class="form-group">
			<label for="">Contraseña:</label>
			<input type="password" name="pwd" id="pwd" class="form-control" value="<?php echo $pwd ?>" placeholder="" required>
		</div>

		<div class="form-group">
			<label for="">Repite La Contraseña:</label>
			<input type="password" name="pwd2" id="pwd2" class="form-control" value="<?php echo $pwd ?>" placeholder="" required>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-3"></div>

				<div class="col-sm-6">
					<input type="submit" value="Guardar" class="btn btn-primary btn-block">
				</div>
				
				<div class="col-sm-3"></div>
			</div>
		</div>
	</form>
</div>



<script src="../js/form.js"></script>