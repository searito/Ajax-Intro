<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>XML - Ajax</title>
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
			<h1 class="titularOne text-center text-danger">Obtener Datos De Un Archivo XML (Un Solo Dato)</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<button id="btn_ajax" class="btn btn-outline-primary">
						<i class="fa fa-file-text-o" aria-hidden="true"></i> Mostrar Información
					</button>
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

			$("#btn_ajax").click(function() {
				var arr = [];

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				 		if (xmlhttp.responseXML !== null) {
				 			arr[0] = xmlhttp.responseXML.getElementsByTagName("nombre").item(0);
				 			arr[1] = xmlhttp.responseXML.getElementsByTagName("apellido").item(0);
				 			arr[2] = xmlhttp.responseXML.getElementsByTagName("edad").item(0);

				 			divImprimo.innerHTML = "<div class=' alert alert-info text-center titularOne' role='alert'>" + 
				 									arr[0].firstChild.nodeValue + " " +
				 								   	arr[1].firstChild.nodeValue + " Tiene " +
				 								   	arr[2].firstChild.nodeValue + 
				 								   " Años </div>";
				 		}
				 	}
				}

				xmlhttp.open("GET", "../ajax/project016.xml", true);
				xmlhttp.send();
			});
		});
	</script>
</body>
</html>