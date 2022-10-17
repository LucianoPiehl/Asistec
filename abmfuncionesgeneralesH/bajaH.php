
<?php include("../abmfuncionesgenerales/conexion.php")?>

<?php 
if(isset($_GET['idhorario']))
{
	$idhorario = $_GET['idhorario'];
	$query = "DELETE FROM horarios WHERE idhorario = $idhorario";
	$result = mysqli_query($conexion, $query);
	if (!$result)
	{
		die("El horario no se elimino correctamente");
	}
	$_SESSION['mensajeH'] = "Horario Eliminado Correctamente";
	$_SESSION['tipomensajeH'] = "danger";
	header("Location:indexH.php");
}

?>