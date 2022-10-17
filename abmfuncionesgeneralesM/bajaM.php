<?php include("../abmfuncionesgenerales/conexion.php")?>

<?php 
if(isset($_GET['idmateria']))
{
	$idmateria = $_GET['idmateria'];
	$query = "DELETE FROM materias WHERE idmateria = $idmateria";
	$result = mysqli_query($conexion, $query);
	if (!$result)
	{
		die("La materia no se elimino correctamente");
	}
	$_SESSION['mensajeM'] = "Materia Eliminada Correctamente";
	$_SESSION['tipomensajeM'] = "danger";
	header("Location:indexM.php");
}

?>