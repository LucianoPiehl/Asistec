<?php include("../abmfuncionesgenerales/conexion.php")?>
<?php include("../includes/header.php")?>
<?php include("../includes/footer.php")?>

<div class="container p-4">
	
	<div class="row">
		
		<div class="col-md-4">

			<?php 
			if (isset($_SESSION['mensajeH'])) { ?>
			

			<div class="alert alert-<?php echo $_SESSION['tipomensajeH'] ?> alert-dismissible fade show" role="alert">
		 	<?php echo $_SESSION['mensajeH']; ?>
		 	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

			<?php 
			session_unset();
			} ?>

			<div class="card card-body">
				
				<form action="GuardarH.php" method="POST">
					
					<div class="form-group">
						Id turno (1=Mañana, 2=Tarde, 3=Noche)<br>
						<input type="number" max="3" name="idturno" class="form-control">

					</div>
					<div class="form-group">
						Hora inicio<br>
						<input type="time" name="horainicio" class="form-control">

					</div>

					<div class="form-group">
						Hora Fin<br>
						<input type="time" name="horafin" class="form-control">

					</div>

					<div class="form-group">
						Id Curso<br>
						<input type="number" name="idcurso" class="form-control">

					</div>

					<div class="form-group">
						Numero Dia Semana (Lunes=1 Domingo=7)<br>
						<input type="number" max="7" name="numerodiasemana" class="form-control">

					</div>

					<div class="form-group">
						Id Materia<br>
						<input type="number" name="idmateria" class="form-control">

					</div>

					<div class="form-group">
						Id Profesor<br>
						<input type="number" name="idprofesor" class="form-control">

					</div>
					<input type="submit" class="btn btn-success" name="GuardarH" value="Añadir Horario">
					
				</form>


			</div>

		</div>

		<div class="col-md-8">
			
			<table class="table table-bordered">
				
				<thead>
					
					<tr>
						
						<th>Id Turno</th>
						<th>Hora Inicio</th>
						<th>Hora Fin</th>
						<th>Id Curso</th>
						<th>Dia Semana</th>
						<th>Id Materia</th>
						<th>Id Profesor</th>
						<th>Acciones</th>

					</tr>

				</thead>
				<tbody>
					
					<?php 
					$query = "SELECT * FROM horarios";
					$result_horarios = mysqli_query($conexion, $query);
					while($row = mysqli_fetch_array($result_horarios)){ ?>

				

						<tr>
							
							<td><?php echo $row['idturno'] ?></td>
							<td><?php echo $row['horainicio'] ?></td>
							<td><?php echo $row['horafin'] ?></td>
							<td><?php echo $row['idcurso'] ?></td>
							<td><?php echo $row['numerodiasemana'] ?></td>
							<td><?php echo $row['idmateria'] ?></td>
							<td><?php echo $row['idprofesor'] ?></td>
							<td>
								<table>
									<td>
								<a class="btn btn-secondary" href="modificarH.php?idhorario=<?php echo $row['idhorario']?>" >
									<i class="fas fa-marker"></i> 
								</a>
								</td>
								<td>
								<a class="btn btn-danger"href="bajaH.php?idhorario=<?php echo $row['idhorario']?>">
									<i class="far fa-trash-alt"></i>
								</a>
								</td>
							</table>
							</td>
						</tr>




				<?php

					}


					?>

				</tbody>

			</table>

		</div>

	</div>

</div>