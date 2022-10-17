<?php include("../abmfuncionesgenerales/conexion.php")?>

<?php 
if(isset($_GET['idhorario']))
{
	$idhorario = $_GET['idhorario'];
	$query = "SELECT * FROM horarios WHERE idhorario = $idhorario";
	$result = mysqli_query($conexion, $query);
	if (mysqli_num_rows($result) == 1)
	{
		$row = mysqli_fetch_array($result);
		$idturno = $row['idturno'];
		$horainicio = $row['horainicio'];
		$horafin = $row['horafin'];
		$idcurso = $row['idcurso'];
		$numerodiasemana = $row['numerodiasemana'];
		$idmateria = $row['idmateria'];
		$idprofesor = $row['idprofesor'];

	}
}

if(isset($_POST['modificarH']))
{
	$idhorario = $_GET['idhorario'];
	$idturno = $_POST['idturno'];
	$horainicio = $_POST['horainicio'];
	$horafin = $_POST['horafin'];
	$idcurso = $_POST['idcurso'];
	$numerodiasemana = $_POST['numerodiasemana'];
	$idmateria = $_POST['idmateria'];
	$idprofesor = $_POST['idprofesor'];
	$query = "UPDATE horarios set idturno = '$idturno', horainicio = '$horainicio', horafin = '$horafin', idcurso = '$idcurso', numerodiasemana = '$numerodiasemana', idmateria = '$idmateria', idprofesor = '$idprofesor' WHERE idhorario = $idhorario";
	$result = mysqli_query($conexion, $query);
	if (!$result)
	{
		die("No se pudo modificar");
	}
	$_SESSION['mensajeH'] = "Horario Modificado Correctamente";
	$_SESSION['tipomensajeH'] = "primary";
	header("Location:indexH.php");
}
?>
<?php include("../includes/header.php")?>

<div class="container p-4">
	<div class="row">
		<div class="col md-4 mx-auto">
			<div class="card card-body">
				<form action="modificarH.php?idhorario=<?php echo $_GET['idhorario']; ?>" method="POST">
					<div class="form-group">
						<input type="number" max="3" name="idturno" value="<?php echo $idturno; ?>" class="form-control">
						<input type="time" name="horainicio" value="<?php echo $horainicio; ?>" class="form-control">
						<input type="time" name="horafin" value="<?php echo $horafin; ?>" class="form-control">
						<input type="number" name="idcurso" value="<?php echo $idcurso; ?>" class="form-control">
						<input type="number" name="numerodiasemana" max="7" value="<?php echo $numerodiasemana; ?>" class="form-control">
						<input type="number" name="idmateria" value="<?php echo $idmateria; ?>" class="form-control">
						<input type="number" name="idprofesor" value="<?php echo $idprofesor; ?>" class="form-control">
                        <button class="btn btn-success" name="modificarH">
                        	Modificar
                        </button>
					</div>
				</form>
			</div>			
		</div>
	</div>
</div>


<?php include("../includes/footer.php")?>

