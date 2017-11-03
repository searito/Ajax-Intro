<?php require "../func/conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Select Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
	<link rel="shortcut icon" href="../img/ajaxicon002.png">
</head>

<style>
	.titularOne{
		font-family: 'Germania One', cursive;
	}
</style>

<body>

	<div class="container-fluid">
		<div class="jumbotron bg-transparent">
			<h1 class="titularOne text-center text-danger">Seleccionando Usuarios (PHP - MySQL)</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="form-group">
						<select name="names" id="names" class="custom-select form-control titularOne">
							<option selected>Selecciona A Una Persona</option>
							<?php
								$result = mysqli_query($con, "SELECT * FROM users");

								while ($usuario = mysqli_fetch_array($result)) {
									echo "<option value='". $usuario['id'] ."'>". $usuario['name'] ."</option>";
								}
							?>
						</select>
					</div>
				</div>

				<div class="col-sm-7" id="respuesta"></div>
			</div>
		</div>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 
	integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" 
	integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function() {
			var divImprimo = document.getElementById("respuesta");

			$("#names").change(function() {
				var idUser = $(this).val();
				console.log(idUser);

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				if (idUser === "Selecciona A Una Persona") {
					divImprimo.innerHTML = "";
				}else{
					xmlhttp.onreadystatechange = function () {
						if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					 		divImprimo.innerHTML = this.responseText;
					 	}
					}
				}

				xmlhttp.open("GET", "../ajax/project011.php?usuario=" + idUser, true);
				xmlhttp.send();
			});
		});
	</script>
</body>
</html>