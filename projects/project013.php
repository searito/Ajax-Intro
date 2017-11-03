<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Insertando Usuarios Ajax</title>
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
			<h1 class="titularOne text-center text-danger">Insertar Usuarios (PHP - MySQL)</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="card text-white bg-dark rounded">
						<div class="card-header text-center titularOne"><h4>Introduce Tus Datos</h4></div>

						<div class="card-body">
							<form id="" method="POST">
								<div class="form-group">
									<label for="">Nombre</label>
									<input type="text" name="txt_name" id="txt_name" class="form-control">
								</div>

								<div class="form-group">
									<label for="">Correo Electrónico</label>
									<input type="email" name="txt_mail" id="txt_mail" class="form-control">
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-2"></div>

										<div class="col-sm-8">
											<!--button id="btn_send" class="btn btn-block btn-warning">
												Almacenar <i class="fa fa-floppy-o" aria-hidden="true"></i>
											</button-->
											<input type="button" name="btn_send" value="Almacenar" id="btn_send" class="btn btn-warning btn-block">
										</div>
										
										<div class="col-sm-2"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-sm-6" id="respuesta"></div>
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

			$("#btn_send").click(function() {
				var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				var nombre = $("#txt_name").val();
				var mail = $("#txt_mail").val();
				var informacionDelUsuario = "nombre=" + nombre + "&correo=" + mail;

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				 		divImprimo.innerHTML = xmlhttp.responseText;
				 	}
				}

				xmlhttp.open("POST", "../ajax/project013.php", true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send(informacionDelUsuario);
			});
		});
	</script>
</body>
</html>