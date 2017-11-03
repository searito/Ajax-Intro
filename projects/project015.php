<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD Ajax</title>
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
			<h1 class="titularOne text-center text-danger">C.R.U.D. (AJAX - PHP - MySQL)</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-1 hidden-xs"></div>

				<div class="col-sm-10 col-xs-12">

					<div class="row container">
						<button class="btn btn-outline-primary" title="Agregar Usuario" data-toggle="modal" data-target="#modalAgregar">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<i class="fa fa-user" aria-hidden="true"></i>
						</button>
					</div>

					
					<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Agregar Usuario</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body">
									<div class="form-group">
										<label for="">Nombre:</label>
										<input type="text" id="nuevoUsuarioID" class="form-control">
									</div>

									<div class="form-group">
										<label for="">Correo Electrónico</label>
										<input type="email" id="nuevoEmailID" class="form-control">
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        							<button type="button" class="btn btn-primary" onclick="agregarUsuario()" id="btn_save">Almacenar</button>
								</div>
							</div>
						</div>
					</div>


					<div class="table-responsive" id="respuesta" style="margin-top: 5%;">
						
					</div>
				</div>

				<div class="col-sm-1 hidden-xs"></div>
			</div>
		</div>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 
	integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" 
	integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="../js/push/push.js"></script>

	<script>
		$(document).ready(function() {
			mostrarUsuarios();
		});


		function mostrarUsuarios () {
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

			xmlhttp.open("GET", "../ajax/project015.php?personas=" + "personas" + "&emailActualizado=" + "" +
							"&usuarioIDActualizado=" + "" + "&nombreActualizado=" + ""+ "&usuarioIDEliminado=" + "" + 
							"&nuevoUsuario=" + "" + "&nuevoEmail=" + "", true);
			xmlhttp.send();
		}


		function editarUsuario (usuarioID) {
			 var nombreID = "nombreID" + usuarioID;
			 var emailID = "emailID" + usuarioID;
			 var borrar = "borrar" + usuarioID;
			 var actualizar = "btn-update-" + usuarioID;
			 var editarNombreID = nombreID + "-editar";
			 var editarEmailID = emailID + "-editar";

			 var nombreDelUsuario = document.getElementById(nombreID).innerHTML;
			 var emailDelUsuario = document.getElementById(emailID).innerHTML;
			 var parent = document.querySelector("#" + nombreID);


			 if (parent.querySelector("#" + editarNombreID) === null) {
			 	document.getElementById(nombreID).innerHTML = ("<input type='text' id='"+ editarNombreID +"' value='"+ nombreDelUsuario +"' class='form-control'>");
			 	document.getElementById(emailID).innerHTML = ("<input type='email' id='"+ editarEmailID +"' value='"+ emailDelUsuario +"' class='form-control'>");
			 	//document.getElementById(borrar).disabled = "true";
			 	document.getElementById(borrar).style.display = "none";
			 	document.getElementById(actualizar).style.display = "block";
			 }
		}


		function actualizarUsuario (usuarioID) {
			 var xmlhttp;

			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var nombreActualizado = document.getElementById("nombreID" + usuarioID + "-editar").value;
			var emailActualizado = document.getElementById("emailID" + usuarioID + "-editar").value;

			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
			 		mostrarUsuarios();
			 	}
			}

			xmlhttp.open("GET", "../ajax/project015.php?usuarioIDActualizado=" + usuarioID + "&emailActualizado=" + emailActualizado +
							"&nombreActualizado=" + nombreActualizado + "&personas=" + "actualizar" + "&usuarioIDEliminado=" + "" +
							"&nuevoUsuario=" + "" + "&nuevoEmail=" + "", true);
			xmlhttp.send();
		}



		function borrarUsuario (usuarioID) {
			var xmlhttp;
			var respuesta = confirm("Estas Seguro Que Quieres Eliminar Este Usuario...???");

			if (respuesta == true) {
			 	if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				 		mostrarUsuarios();
				 	}
				}

				xmlhttp.open("GET", "../ajax/project015.php?usuarioIDEliminado=" + usuarioID + "&emailActualizado=" + "" +
								"&nombreActualizado=" + "" + "&personas=" + "borrar" + "&usuarioIDActualizado=" + "" + 
								"&nuevoUsuario=" + "" + "&nuevoEmail=" + "", true);
				xmlhttp.send();
			}
		}



		function agregarUsuario () {
			 if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var nuevoUsuario = document.getElementById("nuevoUsuarioID").value;
			var nuevoEmail = document.getElementById("nuevoEmailID").value;

			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
			 		mostrarUsuarios();
			 	}
			}

			xmlhttp.open("GET", "../ajax/project015.php?nuevoUsuario=" + nuevoUsuario + "&nuevoEmail=" + nuevoEmail +
							"&nombreActualizado=" + "" + "&personas=" + "agregar" + "&usuarioIDActualizado=" + "" + 
							"&usuarioIDEliminado=" + "" + "&emailActualizado=" + "", true);
			xmlhttp.send();

			$("#btn_save").attr('data-dismiss', 'modal');
		}
	</script>
</body>
</html>