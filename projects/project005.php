<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Número Menor JSON</title>
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
			<h1 class="titularOne text-center text-danger">Econtrando El Número Menor JSON</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<button class="btn btn-block btn-success" id="btn_ajax">
						Calcular
						<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
					</button>
				</div>

				<div class="col-sm-8 border border-success rounded" style="padding-top: 15px;" id="resultado">
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

				xmlhttp.onreadystatechange = function () {
					 if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					 	var datos = JSON.parse(xmlhttp.responseText);
					 	var edadMenor = encontrarEdadMenor(datos);
					 	divImprimo.innerHTML += "<div class='alert alert-success text-center' role='alert'>La Edad Menor Es "+ edadMenor +" Años</div>";
					 }
				}

				xmlhttp.open("GET", "../ajax/project005.json", true);
				xmlhttp.send();
			});


			function encontrarEdadMenor (objetoJSON) {
				 var arreglo = [];

				 for(var i in objetoJSON){
				 	var persona = objetoJSON[i];

				 	arreglo.push(persona.edad);
				 }

				/* var edadMenor = arreglo[0];

				 for(var j = 0; j < arreglo.length; j++){
				 	if (arreglo[j] < edadMenor) {
				 		edadMenor = arreglo[j];
				 	}
				 }*/

				var edadMenor = Math.min.apply(null, arreglo);

				 return edadMenor;
			}
		});
	</script>
</body>
</html>