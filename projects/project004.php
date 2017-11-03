<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>JSON Anidado</title>
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
			<h1 class="titularOne text-center text-danger">Nested JSON</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<button class="btn btn-primary btn-block" id="btn_ajax">
						Ver Datos
						<i class="fa fa-user-circle" aria-hidden="true"></i>
					</button>
				</div>

				<div class="col-sm-9 border rounded bg-secondary" id="resultados" style="padding-top: 15px;"></div>
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
			$("#btn_ajax").click(function() {
				var xmlhttp;
				var resultados = document.getElementById("resultados");

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function () {
					 if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					 	
					 	if (resultados.innerHTML === "") {
					 		var datos = JSON.parse(xmlhttp.responseText);

						 	for(var i in datos){
						 		resultados.innerHTML += "<div class='alert alert-danger text-center titularOne titular'>" + i + "</div>";

						 		var persona = datos[i];

						 		for(var j in persona){
						 			resultados.innerHTML += "<div class='alert alert-info text-center titularOne text-capitalize'>" 
						 			+ j + ": "+ persona[j] + "</div>";
						 		}
						 	}
					 	}
					 }
				}

				xmlhttp.open("GET", "../ajax/project004.json", true);
				xmlhttp.send();
			});
		});
	</script>
</body>
</html>