<?php
$mysqli = new mysqli('localhost','root','','galeria');
$mysqli->set_charset("utf8");
if($mysqli->connect_error){
	echo 'Error en la conexion' . $mysqli->connect_error;	
	exit();
}

?>