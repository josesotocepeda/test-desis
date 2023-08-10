<?php
	// CARGAR SELECT REGIONES
	
	include "../config.php";

	$regiones = array();

	$sql = "SELECT id,name FROM regiones ORDER BY orden ASC";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array(MYSQLI_ASSOC)) {
		$regiones[] = array("id" => $row['id'], "nombre" => $row['name']);
	}
	
	echo json_encode($regiones);
	
	
	$result -> free_result();
	$mysqli -> close();