<?php 
include 'conexion/conexion.php';
$documento = $_POST['documento'];

$sentencia = "SELECT id,nombre, apellido1, apellido2 
				FROM estudiantes 
				WHERE documento = '$documento'";


$consulta = mysqli_query($conexion, $sentencia);
if($consulta){
	if(mysqli_num_rows($consulta)>0){
		
		$estudiante = mysqli_fetch_array($consulta);
		echo json_encode([
			'estado'=>1,
			'id'=> $estudiante['id'],
			'nombre'=> $estudiante['nombre'],
			'apellidos'=>$estudiante['apellido1']." ".$estudiante['apellido2']
			]);
		//echo "<h3>Nombre: ".$estudiante['nombre']."</h3>";
		//echo "<h3>Apellidos: ".$estudiante['apellido1']." ".$estudiante['apellido2']."</h3>";


	}else{
		//echo "No Existe";
		echo json_encode([
			'estado'=>2,
			'mensaje'=> 'No Existe'
			]);
	}
}else{
	echo "Se presentó un error ".mysqli_error($conexion);
}



 ?>