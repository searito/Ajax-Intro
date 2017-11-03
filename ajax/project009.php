<?php 
	$personas = array("Meliodas", "Ban", "Dianne", "Gothwer", "Merlin", "Elizabeth", "King", "Ana", "Musubi", "Tsukiumi",
					  "Matsu", "Kusano", "Homura", "Kazehana", "Searito", "Hitagi", "Tsubasa", "Mayoi", "Sengoku", "Suruga", "Shinobu",
					  "Luffy", "Zoro", "Nami", "Ussop", "Sanji", "Vivi", "Chopper", "Robin", "Frankie", "Brook", "Jinbei", "Carrot",
					  "Lala", "Sairenji", "Risa", "Mikan", "Yami", "Tearju", "Mikado", "Nana", "Momo", "Mea", "Rias", "Kotegawa", 
					  "Oshizu", "Eren", "Mikasa", "Armin", "Erwin", "Annie", "Bertold", "Sasha", "Historia", "Ymir", "Levi", "Hanji", "Reiner");

	$nombre = $_GET['nombre'];
	$sugerencia = "";

	if ($nombre !== "") {
		$nombre = strtolower($nombre);
		$cantidadDeCaracteres = strlen($nombre);

		foreach ($personas as $persona) {
			//-----	ANALIZANDO CADA ELEMENTO EN EL ARREGLO	------------//
			$nombreEnServidor = substr($persona, 0, $cantidadDeCaracteres); //ELEMENTO DEL ARRAY, INDICE INICIAL DE CADA ELEMENTO, CANTIDAD DE CARACTERES INGRRESADOS POR EL USUARIO

			//----	SI LO QUE SE ESCRIBE EN TXT EXISTE EN EL ARRAY -----//
			if (stristr($nombre, $nombreEnServidor) !== false) {
				if ($sugerencia === "") {
					$sugerencia = $persona;
				}else{
					//$sugerencia .= "<div class='alert alert-success text-center titularOne' role='alert'>". $persona ."</div>";
					$sugerencia .= ", $persona";
				}
			}
		}
	}

	echo $sugerencia === "" ? "No Fue Encontrado" : $sugerencia;
?>