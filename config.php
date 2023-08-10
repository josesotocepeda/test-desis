<?php
$dbHost     = 'localhost'; 	// Nombre del servidor
$dbName     = 'test-desis';		// Nombre de la base de datos
$dbUsername = 'root';		// Usuario base datos|
$dbPassword = ''; // Constraseña del usuario de la base de datos
 
//Connect and select the database
$mysqli  = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$mysqli -> set_charset("utf8");
 
 
if ($mysqli -> connect_error) {
    die("Error de Conexion: " . $mysqli ->connect_error);
}

?>