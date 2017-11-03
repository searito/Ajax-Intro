<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
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
			<h1 class="titularOne text-center text-danger">Calculadora - GET</h1>

			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="card text-white bg-dark">
							<div class="card-header"><h4 class="text-center titularOne">Introduce Dos Números</h4></div>

							<div class="card-body">
								<div class="form-group">
									<label for="">Número 1</label>
									<input type="text" name="txt_n1" id="txt_n1" class="form-control">
								</div>

								<div class="form-group">
									<label for="">Número 2</label>
									<input type="text" name="txt_n2" id="txt_n2" class="form-control">
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-4">
											<button id="btn_ajax" class="btn btn-block btn-info">
												Calcular
											</button>
										</div>
										<div class="col-sm-4"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 border border-secondary rounded" style="padding-top: 15px;">
						<div id="previo" class="alert alert-dark text-center titularOne" role='alert'>Resultados</div>

						<div id="resultado"></div>
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
			var divImprimo = document.getElementById("resultado");

			$("#btn_ajax").click(function() {
				var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				var num1 = $("#txt_n1").val();
				var num2 = $("#txt_n2").val();
				var cadena = "num1=" + num1 + "&num2=" + num2;


				xmlhttp.onreadystatechange = function () {
					 if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					 	divImprimo.innerHTML = xmlhttp.responseText;
					 }
				}

				xmlhttp.open("GET", "../ajax/project008.php?" + cadena, true);
				xmlhttp.send();
			});
		});
	</script>
</body>
</html>