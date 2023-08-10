<?php

	include "config.php";

	$nombre	 	= $mysqli->real_escape_string($_POST['nombre']);
	$alias		= $mysqli->real_escape_string($_POST['alias']);
	$rut		= $mysqli->real_escape_string($_POST['rut']);
	$email		= $mysqli->real_escape_string($_POST['email']);
	$region 	= $_POST['regiones'];
	$comuna 	= $_POST['comunas'];
	$candidato 	= $_POST['candidatos'];
	$como		= implode(',', $_POST['como_entero']);

	echo '<pre>'; print_r($_POST); echo '</pre>';
	
	// VALIDAR RUT NO REPETIDO
	$validar_rut = "SELECT rut FROM votaciones WHERE rut = '$rut'";
	
	if ($mysqli -> query($validar_rut)) {
		$voto = $mysqli->affected_rows;
		if ($voto) {
			echo "<h1>No puede votar dos veces</h1>";
			exit();
		} else {
			$sql = "INSERT INTO votaciones (`nombre`, `alias`, `rut`, `email`, `region`, `comuna`, `candidato`, `como`)
					VALUES ('$nombre', '$alias', '$rut', '$email', $region, $comuna, $candidato, '$como')";

			if ($mysqli -> query($sql)) {
			  echo "<h1>Gracias por tu votación</h1>";
			} else {
				printf("<h1>error</h1>");
			}
		}
	}
	
	$mysqli -> close();
	
	echo "<h2><a href='index.html'>Volver a votar</a></h2>";
	
	// 8480946-2
	// 14000470-7