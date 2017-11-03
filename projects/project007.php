<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>POST - PHP</title>
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
			<h1 class="titularOne text-center text-danger">POST - PHP</h1>

			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>

					<div class="col-sm-8 bg-dark rounded">
						<div class="card text-white bg-dark">
							<div class="card-header text-center">
								<h3>Formulario</h3>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label for="">Nombre: </label>
									<input type="text" name="txt_name" class="form-control" id="txt_name">
								</div>

								<div class="form-group">
									<label for="">Apellido:</label>
									<input type="text" name="txt_apellido" class="form-control" id="txt_apellido">
								</div>

								<div class="form-group">
									<input type="submit" name="btn_ajax" value="Enviar" class="btn btn-block btn-warning" id="btn_ajax">
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-2"></div>
				</div>


				<div class="row" style="margin-top: 15px;">
					<div class="col-sm-12" id="resultado"></div>
				</div>
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
			var divImprimo = document.getElementById("resultado");

			$("#btn_ajax").click(function() {
				var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				var nombre = $("#txt_name").val();
				var apellido = $("#txt_apellido").val();
				var informacionDelUsuario = "nombre=" + nombre + "&apellido=" + apellido;

				xmlhttp.onreadystatechange = function () {
					 if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					 	var mensaje = xmlhttp.responseText;
					 	divImprimo.innerHTML = mensaje;
					 }
				}

				xmlhttp.open("POST", "../ajax/project007.php", true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send(informacionDelUsuario);
			});
		});
	</script>
</body>
</html>