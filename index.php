<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ajax Tutorial</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
	<link rel="shortcut icon" href="img/ajaxicon002.png">
</head>

<style>
	.titularOne{
		font-family: 'Germania One', cursive;
	}
</style>

<body>

	<div class="container-fluid">
		<div class="jumbotron bg-transparent">
			<h1 class="titularOne text-center text-danger">Asynchronous JavaScript And XML</h1>
			<h1 class="titularOne text-center text-danger">AJAX</h1>
		</div>


		<div class="row">
			<div class="container">
				<div class="table-responsive">
					<table class="table table-hover table-striped">
						<thead class="thead-inverse">
							<tr>
								<th class="text-center" width="25">N°</th>
								<th class="text-center">Nombre</th>
								<th class="text-center">Enlace</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th scope="row">1</th>
								<td class="text-center">Primer Vistazo</td>
								<td class="text-center">
									<a href="projects/project001.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">2</th>
								<td class="text-center">Como Leer JSON</td>
								<td class="text-center">
									<a href="projects/project002.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">3</th>
								<td class="text-center">Array JSON</td>
								<td class="text-center">
									<a href="projects/project003.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">4</th>
								<td class="text-center">Nested JSON</td>
								<td class="text-center">
									<a href="projects/project004.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">5</th>
								<td class="text-center">Encontrando El Número Menor JSON</td>
								<td class="text-center">
									<a href="projects/project005.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">6</th>
								<td class="text-center">Buscando En Un Objeto JSON</td>
								<td class="text-center">
									<a href="projects/project006.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">7</th>
								<td class="text-center">POST - PHP</td>
								<td class="text-center">
									<a href="projects/project007.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">8</th>
								<td class="text-center">Calculadora - GET</td>
								<td class="text-center">
									<a href="projects/project008.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">9</th>
								<td class="text-center">Buscando Usuario En Servidor - GET - PHP</td>
								<td class="text-center">
									<a href="projects/project009.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">10</th>
								<td class="text-center">PHP - MySQL</td>
								<td class="text-center">
									<a href="projects/project010.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">11</th>
								<td class="text-center">Seleccionar Usuario (PHP - MySQL)</td>
								<td class="text-center">
									<a href="projects/project011.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">12</th>
								<td class="text-center">Buscador De Usuarios (PHP - MySQL)</td>
								<td class="text-center">
									<a href="projects/project012.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">13</th>
								<td class="text-center">Insertar Usuarios (PHP - MySQL)</td>
								<td class="text-center">
									<a href="projects/project013.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">14</th>
								<td class="text-center">Proyecto Integrador (AJAX - PHP - MySQL)</td>
								<td class="text-center">
									<a href="projects/project014.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">15</th>
								<td class="text-center">C.R.U.D. (AJAX - PHP - MySQL)</td>
								<td class="text-center">
									<a href="projects/project015.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">16</th>
								<td class="text-center">Obtener Datos De Un Archivo XML (Single)</td>
								<td class="text-center">
									<a href="projects/project016.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">17</th>
								<td class="text-center">Obtener Datos De Un Archivo XML (Multi)</td>
								<td class="text-center">
									<a href="projects/project017.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">18</th>
								<td class="text-center">Lista Desplegable Usando XML</td>
								<td class="text-center">
									<a href="projects/project018.php" class="btn btn-outline-danger btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">19</th>
								<td class="text-center">Buscador De Personas Usando XML</td>
								<td class="text-center">
									<a href="projects/project019.php" class="btn btn-outline-success btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							<tr>
								<th scope="row">20</th>
								<td class="text-center">C.R.U.D. (AJAX - PHP - PDO - MySQL)</td>
								<td class="text-center">
									<a href="projects/project00x.php" class="btn btn-outline-primary btn-block" title="Ver" target="_blank">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

						</tbody>
					</table>
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
</body>
</html>