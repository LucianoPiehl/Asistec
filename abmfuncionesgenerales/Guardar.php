<?php
include("conexion.php");

if (isset($_POST['Guardar'])){
$DNI = $_POST['DNI'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail']; 
$telefono = $_POST['telefono'];
$numero_tarjeta = $_POST['numero_tarjeta'];
}
    

$query = "INSERT INTO profesores(DNI,nombre,apellido,mail,telefono,numero_tarjeta) VALUES ('$DNI','$nombre','$apellido','$mail','$telefono','$numero_tarjeta')";

$result = mysqli_query($conexion, $query);
if (!$result) 
{
    die("Fallo En Guardado");
}

$_SESSION['mensaje'] = 'Profesor guardado correctamente';
$_SESSION['tipo_de_mensaje'] = 'success';
header("Location: index.php");












/* CONFIRMACION DE QUE LOS DATOS SE RECIBEN CORRECTAMENTE
echo $DNI;
echo $nombre;
echo $apellido;
} 
else {echo "nop";}*/

 ?>