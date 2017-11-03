<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>JSON Array</title>
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
			<h1 class="titularOne text-center text-danger">JSON Array</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<button class="btn btn-primary btn-block" id="btn_ajax">
						<i class="fa fa-users" aria-hidden="true"></i> Ver Miembros
					</button>
				</div>

				<div class="col-sm-8 border rounded" style="padding-top: 15px;">
					<div id="info"></div>
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
		$("#btn_ajax").click(function() {
			var xmlhttp;
			var respuesta = document.getElementById("info");

			// ------ AVERIGUANDO SI EL NAVEGADOR ES NUEVO O VIEJO -----//
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					var datos = JSON.parse(xmlhttp.responseText);

					if (respuesta.innerHTML === "") {

						for (var i in datos) {
							/*var persona = datos[i];
							
							respuesta.innerHTML += "<div class='alert alert-danger text-center titularOne' role='alert'>" 
							+ persona.Nombre + " " + persona.Apellido + " Tiene "+ persona.Edad +" Años<div>";*/
							
							respuesta.innerHTML += "<div class='alert alert-danger text-center titularOne' role='alert'>" 
							+ datos[i].Nombre + " " + datos[i].Apellido + " Tiene "+ datos[i].Edad +" Años<div>";
						}
					}
					
					console.log('El Array Tipo JSON Posee ' + datos.length + ' Elementos...');
				}
			}

			xmlhttp.open("GET", "../ajax/project003.json", true);
			xmlhttp.send();
		});
	</script>
</body>
</html>