
<?php include("../abmfuncionesgenerales/conexion.php")?>
<?php include("../includes/header.php")?>
<?php include("../includes/footer.php")?> 
<?php
	if (isset($_POST['GuardarH']))
	{
		$idturno = $_POST['idturno'];
		$horainicio = $_POST['horainicio'];
		$horafin = $_POST['horafin'];
		$idcurso = $_POST['idcurso'];
		$numerodiasemana = $_POST['numerodiasemana'];
		$idmateria = $_POST['idmateria'];
		$idprofesor = $_POST['idprofesor'];
	
		// echo $idturno;
		// if ($idturno = NULL)
		// 	{

		// 	echo "El turno no fue ingresado";
		// 	}
		// }

		// echo $idturno;
		// echo $horainicio;
		// echo $horafin;
		// echo $idcurso;
		// echo $numerodiasemana;
		// echo $idmateria;
		// echo $idprofesor;
	$query = "INSERT INTO horarios VALUES (0, '$idturno', '$horainicio', '$horafin', '$idcurso', '$numerodiasemana', '$idmateria', '$idprofesor')";
	$result = mysqli_query($conexion, $query);
	if (!$result) {
		die("Fallo en guardado de horario");

	}
	$_SESSION['mensajeH'] = "Horario Guardado Correctamente";
	$_SESSION['tipomensajeH'] = "success";
	header("Location:indexH.php");
	}
?>