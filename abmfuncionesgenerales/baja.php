<?php 

include("conexion.php");

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "DELETE FROM profesores WHERE id = $id";
	$result = mysqli_query($conexion,$query);
	if (!$result) {
	die("Fallo en eliminar profesor");
	}


$_SESSION['mensaje'] = "Profesor eliminado correctamente";
$_SESSION['tipo_de_mensaje'] = 'danger';
header("Location: index.php");
}



 ?>