<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conociendo Ajax</title>
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
			<h1 class="titularOne text-center text-danger">Primer Vistazo</h1>
		</div>

		<div class="row">
			<div class="container">
				<button class="btn btn-primary" title="Hazme Click" id="btn_ajax">
					<i class="fa fa-hand-pointer-o" aria-hidden="true"></i> 
					Hazme Click
					<i class="fa fa-hand-pointer-o" aria-hidden="true"></i> 
				</button><br><br>

				<div id="info" class="border rounded centrar-contenido"></div>
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
			$("#info").hide();

			$("#btn_ajax").click(function() {

				// ---- VERIFICAR EL TIPO DE NAVEGADOR QUE SE ESTA USANDO -----//
				/*var ajaxRequest;

				if (window.XMLHttpRequest) {  // ---- VER SI EL NAVEGADOR QUE SE ESTA USANDO ESTÁ ACTUALIZADO ---- //
					ajaxRequest =  new XMLHttpRequest();     // ---- CREANDO UN OBJETO DEL TIPO XMLHTTPREQUEST EN NAVEGADOR ACTUALIZADO
				}else{
					// ---- CREANDO UN OBJETO DEL TIPO XMLHTTPREQUEST EN NAVEGADOR VIEJO
					ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
				}*/

				var ajaxRequest = new XMLHttpRequest();

				ajaxRequest.onreadystatechange = function () {
					/*
						0 PETICION NO HA SIDO INICIALIZADA
						1 PETICION HA SIDO ESTABLECIDA
						2 PETICION HA SIDO ENVIADA
						3 PETICION HA SIDO PROCESADA
						4 PETICION HA SIDO FINALIZADA
					*/
					 if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {	//----- 200 = ESTADO DE LA PETICION EXITOSO
					 	$("#info").show().attr('class', 'titularOne').html(ajaxRequest.responseText).css('fontSize', '20px');
					 	//document.getElementById("info").innerHTML = ajaxRequest.responseText;
					 }
				}

				ajaxRequest.open("GET", "../ajax/project001.txt", true);
				ajaxRequest.send();
			});
		});
	</script>
</body>
</html>