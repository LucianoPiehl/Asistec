
<?php include("../abmfuncionesgenerales/conexion.php")?>
<?php include("../includes/header.php")?>
<?php include("../includes/footer.php")?>
<div class="col-md-8">
			
			<table class="table table-bordered">
				
				<thead>
					
					<tr>
						<th>Id Curso</th>
						<th>Año Lectivo</th>
						<th>Año</th>
						<th>Division</th>
						
						

					</tr>

				</thead>
				<tbody>
					
					<?php 
					$query = "SELECT * FROM cursos";
					$result_materias = mysqli_query($conexion, $query);
					while($row = mysqli_fetch_array($result_materias)){ ?>

				

						<tr>
							
							<td><?php echo $row['idcurso'] ?></td>
							<td><?php echo $row['aniolectivo'] ?></td>
							<td><?php echo $row['anio'] ?></td>
							<td><?php echo $row['division'] ?></td>

							<?php } ?>