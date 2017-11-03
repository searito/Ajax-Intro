<?php
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];

	$respuesta = "";

	//------------	VERIFICANDO QUE LOS PARAMENTROS RECIBIDOS SEAN NUMEROS 	-----------//
	if (!ctype_digit($num1)  || !ctype_digit($num2)) { 
		$respuesta .= "<div class='alert alert-danger text-center titularOne' role='alert'>Ingresa Dos Números...</div>";
	}else{
		$respuesta .= "<div class='alert alert-primary text-center titularOne' role='alert'>". $num1 ." + ". $num2 ." = <u>". ($num1 + $num2) ."</u></div>";
		$respuesta .= "<div class='alert alert-success text-center titularOne' role='alert'>". $num1 ." - ". $num2 ." = <u>". ($num1 - $num2) ."</u></div>";
		$respuesta .= "<div class='alert alert-warning text-center titularOne' role='alert'>". $num1 ." x ". $num2 ." = <u>". ($num1 * $num2) ."</u></div>";
		$respuesta .= "<div class='alert alert-danger text-center titularOne' role='alert'>". $num1 ." / ". $num2 ." = <u>". ($num1 / $num2) ."</u></div>";
	}

	echo $respuesta;
?>