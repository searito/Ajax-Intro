<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyecto Integrador</title>
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

	.cursor{
		cursor: pointer;
	}
</style>

<body>

	<div class="container-fluid">
		<div class="jumbotron bg-transparent">
			<h1 class="titularOne text-center text-danger">Proyecto Integrador (AJAX - PHP - MySQL)</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="card bg-dark text-white rounded">
						<div class="card-header"><h4 class="text-center titularOne">Introduce Un Nombre</h4></div>

						<div class="card-body">
							<form method="POST">
								<div class="form-group">
									<label for="">Nombre</label>
									<input type="text" name="txt_name" id="txt_name" class="form-control">
								</div>
							</form>	
						</div>
					</div>
				</div>

				<div class="col-sm-6" id="respuesta"></div>
			</div>

			<div class="row">
				<div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="text-center text-danger titularOne modal-title">Información Del Usuario</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-body" id="contenido_modal">
								
							</div>

							<div class="modal-footer">
								<button class="btn btn-danger" type="button" data-dismiss="modal">Cerrar</button>
							</div>

						</div>
					</div>
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
			var divImprimo = document.getElementById("respuesta");

			var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				 		divImprimo.innerHTML = xmlhttp.responseText;
				 	}
				}

				xmlhttp.open("GET", "../ajax/project014.php", true);
				xmlhttp.send();
				

			

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
				 		divImprimo.innerHTML = xmlhttp.responseText;
				 	}
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				 		divImprimo.innerHTML = xmlhttp.responseText;
				 	}
				}

				xmlhttp.open("GET", "../ajax/project014.php?nombre=" + nombre, true);
				xmlhttp.send();
				
			});

		});



		function getId(elem){
			var dataId = $(elem).data('id');
			var modalContent = document.getElementById("contenido_modal");

			var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				 		modalContent.innerHTML = xmlhttp.responseText;
				 	}
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				 		modalContent.innerHTML = xmlhttp.responseText;
				 	}
				}

				xmlhttp.open("GET", "../ajax/project014-show.php?id=" + dataId, true);
				xmlhttp.send();
		}
	</script>
</body>
</html>