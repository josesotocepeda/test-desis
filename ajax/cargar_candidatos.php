<?php
	// CARGAR SELECT CANDIDATOS
	
	include "../config.php";

	$candidatos = array();

	$sql = "SELECT id,nombre FROM candidatos ORDER BY nombre ASC";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array(MYSQLI_ASSOC)) {
		$candidatos[] = array("id" => $row['id'], "nombre" => $row['nombre']);
	}
	
	echo json_encode($candidatos);
	
	
	$result -> free_result();
	$mysqli -> close();