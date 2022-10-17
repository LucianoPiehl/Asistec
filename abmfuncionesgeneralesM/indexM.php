<?php include("../abmfuncionesgenerales/conexion.php")?>
<?php include("../includes/header.php")?>
<?php include("../includes/footer.php")?>

<div class="container p-4">
	
	<div class="row">
		
		<div class="col-md-4">

			<?php 
			if (isset($_SESSION['mensajeM'])) { ?>
			

			<div class="alert alert-<?php echo $_SESSION['tipomensajeM'] ?> alert-dismissible fade show" role="alert">
		 	<?php echo $_SESSION['mensajeM']; ?>
		 	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

			<?php 
			session_unset();
			} ?>

			<div class="card card-body">
				
				<form action="GuardarM.php" method="POST">
					
					<div class="form-group">
						Nombre Materia<br>
						<input type="text" name="nombremateria" class="form-control"required="" pattern="[a-zA-Z]+">

					</div>
					<div class="form-group">
						Id Curso<br>
						<input type="text" name="idcurso" class="form-control" required="" pattern="[0-9]+">

					</div>

					<div class="form-group">
						Numero de Grupo<br>
						<input type="text" name="nrogrupo" class="form-control" required="" pattern="[0-9]+">

					</div>

					<input type="submit" class="btn btn-success" name="GuardarM" value="Añadir Materia">
					
				</form>


			</div>

		</div>

		<div class="col-md-8">
			
			<table class="table table-bordered">
				
				<thead>
					
					<tr>
						<th>Id Materia</th>
						<th>Nombre Materia</th>
						<th>Id Curso</th>
						<th>Numero de Grupo</th>
						<th>Acciones</th>
						

					</tr>

				</thead>
				<tbody>
					
					<?php 
					$query = "SELECT * FROM materias";
					$result_materias = mysqli_query($conexion, $query);
					while($row = mysqli_fetch_array($result_materias)){ ?>

				

						<tr>
							
							<td><?php echo $row['idmateria'] ?></td>
							<td><?php echo $row['nombremateria'] ?></td>
							<td><?php echo $row['idcurso'] ?></td>
							<td><?php echo $row['nrogrupo'] ?></td>
						
								
									<td>
										<table>
											<td>
								<a class="btn btn-secondary" href="modificarM.php?idmateria=<?php echo $row['idmateria']?>" >
									<i class="fas fa-marker"></i> 
								</a>
							</td>
							<td>
								<a class="btn btn-danger"href="bajaM.php?idmateria=<?php echo $row['idmateria']?>">
									<i class="far fa-trash-alt"></i>
								</a>

							</td>


							</table>
								</td>
				<?php

					}


					?>

							</table>
							</td>
						</tr>




				

				</tbody>

			</table>

		</div>

	</div>

</div>