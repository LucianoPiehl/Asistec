<?php include("../abmfuncionesgenerales/conexion.php")?>
<?php include("../includes/header.php")  ?>

<?php include("../includes/footer.php")  ?>
<?php
 if (isset($_SESSION['mensaje']))
{ ?>
	<div class="alert alert-<?php echo $_SESSION['tipo_de_mensaje'];?> alert-dismissible fade show" role="alert">
<?php echo $_SESSION['mensaje'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
</div>

<?php session_unset(); } ?>
                 <!-- TABLA AÑADIR ID -->
<input type="submit" value="Añadir Profesor" class="btn btn-success" onclick = "location='../abmfuncionesgenerales/InsertarProfesor.php'"/>

		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id Profesor</th>
						<th>DNI</th>	
						<th>Nombre</th>	
						<th>Apellido</th>
						<th>Mail</th>
						<th>Telefono</th>
						<th>Modificar/Eliminar</th>				
					</tr>
				</thead>
				<tbody>

					<?php 
					$query = "SELECT * FROM profesores";
					$ResultProf = mysqli_query($conexion,$query);

					while ($row = mysqli_fetch_array($ResultProf)) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['DNI']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['apellido']; ?></td>
							<td><?php echo $row['mail']; ?></td>
							<td><?php echo $row['telefono']; ?></td>
							<td> 
								<a href="modificar.php?id=<?php echo $row['id']  ?>" class="btn btn-secondary">
								<i class="fas fa-marker"></i>
								</a>
								<a href="baja.php?id=<?php echo $row['id']  ?>" class="btn btn-danger">
									<i class="far fa-trash-alt"></i>
								</a>
							</td>
						</tr>

					<?php }  ?>
				</tbody>
			</table>
		</div>

</div>