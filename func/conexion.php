<?php 
	$mysql_host = "localhost";
	$mysql_user = "root";
	$mysql_pass = "";
	$mysql_db = "test";

	$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

	if (mysqli_connect_errno()) {
		echo "<div class='alert alert-error text-center' role='alert'>Error En La Conexión ". mysqli_connect_errno()."</div>";
	}
?>