<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscador XML</title>
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
			<h1 class="titularOne text-center text-danger">Buscador De Personas Con XML</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Introduce Un Nombre</label>
						<input type="text" name="name" id="txt_name" class="form-control">
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

			$("#txt_name").keyup(function() {
				var nombre = $(this).val();
				var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						if (xmlhttp.responseXML !== null) {
							var xmlDoc = xmlhttp.responseXML;
							var x = encontrarPersona(xmlDoc, nombre);

							divImprimo.innerHTML = x;
						}
					}
				}

				xmlhttp.open("GET", "../ajax/project019.xml", true);
				xmlhttp.send();
			});
		});


		function encontrarPersona (xmlDoc, usuario) {
			 var mensaje = "";
			 var usuarios = [];
			 var persona = xmlDoc.getElementsByTagName("cliente");

			 for (var i = 0; i < persona.length; i++) {
			 	usuarios.push(persona[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue);
			 }

			 // CUANDO UN ELEMENTO NO SE ENCUENTRA EN EL ARRAY DA COMO INDICE -1 //
			 mensaje = usuarios.indexOf(usuario) !== -1 ? "<div class='alert alert-success text-center' role='alert'> Si Fue Encontrado </div>" : 
		 												  "<div class='alert alert-danger text-center' role='alert'> No Fue Encontrado </div>";

			 return mensaje;
		}
	</script>
</body>
</html>