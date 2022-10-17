<?php

include("conexion.php");
if (isset($_GET['id']))
{
$id = $_GET['id'];
$query = "SELECT * FROM profesores WHERE id = $id";
$result = mysqli_query($conexion, $query);
if(mysqli_num_rows($result) == 1)
		{
			$row = mysqli_fetch_array($result);
			$DNI = $row['DNI'];
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
			$mail = $row['mail'];
			$telefono = $row['telefono'];
		}
}

if(isset($_POST['Actualizar']))
{
$id = $_GET['id'];
$DNI = $_POST['DNI'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];

$query = "UPDATE profesores set DNI = '$DNI', nombre = '$nombre', apellido = '$apellido', mail = '$mail', telefono = '$telefono' WHERE id = $id";
mysqli_query($conexion, $query);
$_SESSION['mensaje'] = "Datos modificados correctamente";
$_SESSION['tipo_de_mensaje'] = 'primary';
header("Location: index.php");
};

?>




<?php include("../includes/header.php") ?>

<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">	
					<div class="card card-body">
							<form action="modificar.php?id=<?php  echo $_GET['id']; ?>" method="POST">
									<div class="form group">		<input type="text" name="DNI" value="<?php echo $DNI ?>" class="form-control" placeholder="Escribe nuevo DNI">
									</div>	
									<div class="form group">		<input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Escribe nuevo nombre">
									</div>	
									<div class="form group">		<input type="text" name="apellido" value="<?php echo $apellido ?>" class="form-control" placeholder="Escribe nuevo apellido">
									</div>	
									<div class="form group">		<input type="text" name="mail" value="<?php echo $mail ?>" class="form-control" placeholder="Escribe nuevo mail">
									</div>	
									<div class="form group">		<input type="text" name="telefono" value="<?php echo $telefono ?>" class="form-control" placeholder="Escribe nuevo telefono(Porfavor, no utiize espacios)">
									</div>	
									<button class="btn btn-success" style="width:203px;height:70px" name="Actualizar">			
											   Actualizar  
									</button>	
							</form>
					</div>
			</div>
		</div>
</div>

<?php include("../includes/footer.php") ?>