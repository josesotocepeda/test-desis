<?php
	// CARGAR SELECT COMUNAS
	
	include "../config.php";

	if (isset($_POST['id'])) {

		$region_id = $_POST['id'];
		$comunas = array();

		$sql = "SELECT id,name FROM comunas WHERE region_id=".$region_id." ORDER BY name ASC";
		$result = $mysqli->query($sql);

		while( $row = $result->fetch_array(MYSQLI_ASSOC)) {
			$comunas[] = array("id" => $row['id'], "nombre" => $row['name']);
		}
		
		echo json_encode($comunas);
		
		$result -> free_result();
		$mysqli -> close();
	}