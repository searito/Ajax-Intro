<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscando En Server</title>
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
			<h1 class="titularOne text-center text-danger">Buscador De Usuarios En Servidor (MySQL - PHP)</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<form>
						<div class="form-group">
							<label for="">Introduce Nombre: </label>
							<input type="text" name="txt_name" id="txt_name" class="form-control">
						</div>
					</form>
				</div>

				<div class="col-sm-6">
					<div class="alert alert-dark text-center titularOne">Sugerencias</div>
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
		$(document).ready(function() {
			var divImprimo = document.getElementById("info");
			$("#info").hide();

			$("#txt_name").keyup(function() {
				var xmlhttp;
				var nombre = $("#txt_name").val();


				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				if (nombre.length == 0) {
					document.getElementById("info").innerHTML = "";
					$("#info").hide();
				}else{
					xmlhttp.onreadystatechange = function () {
						if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
							$("#info").show();
					 		divImprimo.innerHTML = xmlhttp.responseText;
					 	}
					}

					xmlhttp.open("GET", "../ajax/project012.php?nombre=" + nombre, true);
					xmlhttp.send();
				}
			});
		});
	</script>
</body>
</html>