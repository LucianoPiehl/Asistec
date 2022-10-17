<?php include("../abmfuncionesgenerales/conexion.php")?>

<?php 
if(isset($_GET['idmateria']))
{
	$idmateria = $_GET['idmateria'];
	$query = "SELECT * FROM materias WHERE idmateria = $idmateria";
	$result = mysqli_query($conexion, $query);
	if (mysqli_num_rows($result) == 1)
	{
		$row = mysqli_fetch_array($result);
		$nombremateria = $row['nombremateria'];
		$idcurso = $row['idcurso'];
		$nrogrupo = $row['nrogrupo'];

	}
}

if(isset($_POST['modificarM']))
{
	$idmateria = $_GET['idmateria'];
	$nombremateria = $_POST['nombremateria'];
	$idcurso = $_POST['idcurso'];
	$nrogrupo = $_POST['nrogrupo'];
	$query = "UPDATE materias set nombremateria = '$nombremateria', idcurso = '$idcurso', nrogrupo = '$nrogrupo' WHERE idmateria = $idmateria";
	$result = mysqli_query($conexion, $query);
	if (!$result)
	{
		die("No se pudo modificar la materia");
	}
	$_SESSION['mensajeM'] = "Materia Modificada Correctamente";
	$_SESSION['tipomensajeM'] = "primary";
	header("Location:indexM.php");
}
?>
<?php include("../includes/header.php")?>

<div class="container p-4">
	<div class="row">
		<div class="col md-4 mx-auto">
			<div class="card card-body">
				<form action="modificarM.php?idmateria=<?php echo $_GET['idmateria']; ?>" method="POST">
					<div class="form-group">
						<input type="text" name="nombremateria" value="<?php echo $nombremateria; ?>" class="form-control">
						<input type="number" name="idcurso" value="<?php echo $idcurso; ?>" class="form-control">
						<input type="number" name="nrogrupo" value="<?php echo $nrogrupo; ?>" class="form-control">
                        <button class="btn btn-success" name="modificarM">
                        	Modificar
                        </button>
					</div>
				</form>
			</div>			
		</div>
	</div>
</div>


<?php include("../includes/footer.php")?>

