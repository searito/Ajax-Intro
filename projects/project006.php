<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscandor</title>
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
			<h1 class="titularOne text-center text-danger">Buscador De Personas En Objeto JSON</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Introduce Un Nombre</label>
						<input type="text" name="txt_name" class="form-control" id="txt_name">
					</div>
				</div>

				<div class="col-sm-6 border rounded" id="resultados" style="padding-top: 15px;"></div>
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
			$("#txt_name").keyup(function() {
				var contenido = $(this).val();

				var divImprimo = document.getElementById("resultados");
				var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				if (contenido.length === 0) {
					divImprimo.innerHTML = "";
					$("#resultados").removeClass('bg-dark');
				}else{
					xmlhttp.onreadystatechange = function () {
						 if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						 	var datos = JSON.parse(xmlhttp.responseText);
						 	var x = encontrarPersona(datos, contenido);
						 	var mensaje = (x === true) ? "<div class='alert alert-success text-center'>Persona Encontrada</div>" : 
						 								 "<div class='alert alert-danger text-center'>Persona No Encontrada</div>";

							divImprimo.innerHTML = mensaje;

							$("#resultados").addClass('bg-dark');
						 }
					}

					xmlhttp.open("GET", "../ajax/project006.json", true);
					xmlhttp.send();
				}
			});

			/*function ajaxGetJSON (usuarioIngresado) {
				var divImprimo = document.getElementById("resultados");
				var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				if (usuarioIngresado.length === 0) {
					divImprimo.innerHTML = "";
				}else{
					xmlhttp.onreadystatechange = function () {
						if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						 	var datos = JSON.parse(xmlhttp.responseText);
						 	var x = encontrarPersona(datos, usuarioIngresado);
						 	var mensaje = (x === true) ? "<div class='alert alert-success text-center'>Persona Encontrada</div>" : 
						 								 "<div class='alert alert-danger text-center'>Persona No Encontrada</div>";

							divImprimo.innerHTML = mensaje;
						 }
					}

					xmlhttp.open("GET", "../ajax/project006.json", true);
					xmlhttp.send();
				}
			}*/


			function encontrarPersona (objectJSON, usuario) {
				var arreglo = [];

				for(var i in objectJSON){
					var persona = objectJSON[i];

					arreglo.push(persona.nombre);
				}

				return arreglo.indexOf(usuario) > -1;
			}
		});
	</script>
</body>
</html>