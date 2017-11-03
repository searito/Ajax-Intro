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
			<h1 class="titularOne text-center text-danger">CRUD (AJAX - PHP - PDO - MySQL)</h1>
		</div>

		<div class="container">
			<div id="contenido">
				<button id="btn_usuarios" class="btn btn-outline-primary" title="Agregar Usuario">
					<i class="fa fa-plus" aria-hidden="true"></i>
					<i class="fa fa-user" aria-hidden="true"></i>
				</button>

				<h3 class="text-center titularOne">Lista De Usuarios</h3>
	
				<div class="row" style="margin-top: 5%">
					<!--div class="col-sm-1"></div-->

					<div class="col-sm-12">

					<!--div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="alertas">
				  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    		<span aria-hidden="true">&times;</span>
				  		</button>
					</div-->

						<div class="table-responsive">
							<table class="table table-hover table-striped">
								<thead class="thead-inverse">
									<tr>
										<th class="text-center" width="25">N°</th>
										<th class="text-center">Nombre</th>
										<th class="text-center">Dirección</th>
										<th class="text-center">Teléfono</th>
										<th class="text-center">Email</th>
										<th class="text-center">Opciones</th>
									</tr>
								</thead>

								<tbody>
									<?php 
										require('../func/database.php');

										$pdo = Database::connect();
										$sql = ("SELECT * FROM personas");
										$num = 1;

										foreach ($pdo->query($sql) as $row) {
											echo "<tr>
											      	<th scope='row'>".$num."</th>
											      	<td>".$row['nombre']."</td>
											      	<td>".$row['direccion']."</td>
											      	<td>".$row['telefono']."</td>
											      	<td>".$row['email']."</td>
											      	<td>
											      		<button class='btn btn-outline-info' onclick='editar(".$row['id'].")' 
											      		        title='Editar Información De ".$row['nombre']."'>
										      		        <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
									      		        </button>

									      		        <button class='btn btn-outline-danger' onclick='eliminar(".$row['id'].", this)' 
											      		        title='Eliminar A ".$row['nombre']."'>
										      		        <i class='fa fa-trash-o' aria-hidden='true'></i>
									      		        </button>
											      	</td>
											      </tr>";
											      $num++;
										}
										Database::disconnect();
									?>
								</tbody>
							</table>
						</div>
					</div>
					
					<!--div class="col-sm-1"></div-->
				</div>
			</div>
		</div>
	</div>
	

	<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 
	integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" 
	integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="../js/crud.js"></script>
</body>
</html>