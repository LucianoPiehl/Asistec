<?php include("../abmfuncionesgenerales/conexion.php")?>
<?php include("../includes/header.php")  ?>
<?php include("../includes/footer.php")  ?>

<div class="row">
		<div class="col-md-4">




			<div class="card card-body">
				<form action="Guardar.php" method="POST">
					<div class="form-group">		

						<input type="text" name="DNI" class="form-control" placeholder="Añadir DNI" required="" pattern="[0-9]+">

					</div>
						<div class="form group">
							<input type="text" name="nombre" class="form-control" placeholder="Añadir nombre" required="" pattern="[a-zA-Z]+">
						</div>
						<div class="form group">
							<input type="text" name="apellido" class="form-control" placeholder="Añadir apellido" required="" pattern="[a-zA-Z]+">
						</div>
						<div class="form group">
							<input type="text" name="mail" class="form-control" placeholder="Añadir correo electronico" required="">
						</div>
						<div class="form group">
							<input type="text" name="telefono" class="form-control" placeholder="Añadir telefono (Porfavor, no utilize espacios)" required="" pattern="[0-9]+">
						</div>
							<div class="form group">
							<input type="text" name="numero_tarjeta" class="form-control" placeholder="Pulse este cuadro y pase por el lector la tarjeta" required="" pattern="[0-9]+">
						</div>
						<hr>Adjuntar Imagen</hr>
		<div method="post" action="index.php" enctype="multipart/form-data" class="btn btn-success btn-block">
			<input type="file" name="Imagen" class="btn btn-success btn-block"><br>
			<button type="submit" class="btn btn-success btn-block" name="Guardar">Enviar</button>
		</div>

							<!-- FALTA EN EL FORMULARIO LA IMAGEN DEL PROFESOR,LOS HORARIOS,MATERIAS QUE ENSEÑA,NRO TARJETA -->
				</form>
			</div>	
		</div>