<?php 
include 'conexion/conexion.php';
$documento = $_POST['documento'];

$sentencia = "SELECT nombre, apellido1, apellido2 
				FROM estudiantes 
				WHERE documento = '$documento'";


$consulta = mysqli_query($conexion, $sentencia);
if($consulta){
	if(mysqli_num_rows($consulta)>0){
		echo "Si existe";
	}else{
		echo "No Existe";
	}
}else{
	echo "Se presentó un error ".mysqli_error($conexion);
}



 ?>