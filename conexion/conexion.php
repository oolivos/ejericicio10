<?php
$server = "localhost";
$username = "root";
$password = "root";
$bd = "proweb";

$conexion = mysqli_connect($server, $username, $password, $bd);

if (!$conexion){
	echo "Error al conectar". mysqli_error();
	
}





?>