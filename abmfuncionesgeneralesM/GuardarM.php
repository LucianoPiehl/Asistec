
<?php include("../abmfuncionesgenerales/conexion.php")?>
<?php include("../includes/header.php")?>
<?php include("../includes/footer.php")?> 
<?php
	if (isset($_POST['GuardarM']))
	{
		$nombremateria = $_POST['nombremateria'];
		$idcurso = $_POST['idcurso'];
		$nrogrupo = $_POST['nrogrupo'];
	
		
	$query = "INSERT INTO materias(idmateria, nombremateria, idcurso, nrogrupo) VALUES (NULL , '$nombremateria', '$idcurso', '$nrogrupo')";
	$result = mysqli_query($conexion, $query);
	if (!$result) {
		die("Fallo en guardado de materias");
	}
	$_SESSION['mensajeM'] = "Materia Guardada Correctamente";
	$_SESSION['tipomensajeM'] = "success";
	header("Location:indexM.php");
	}
?>