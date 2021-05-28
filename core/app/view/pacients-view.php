<?php $busqueda = 0; ?>
<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">
			<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
		</div>
		<div class="card">
			<div class="card-header" data-background-color="blue">
				<h4 class="title">Personas Victimas Conflicto</h4>
			</div>

			<div class="card-content table-responsive">
				<label for="inputEmail1" class="col-lg-2 control-label">Numero Documento Busqueda*</label>
				<div class="col-md-6">
					<input type="text" name="numerobusqueda" class="form-control" id="id_numerobusqueda" placeholder="Ingrese número de documento a buscar">
				</div>
				<a href="index.php?view=validatepacient&id=<?php echo $busqueda; ?>" class="btn btn-default"><i class='fa fa-male'></i> Validar Persona</a>
			</div>

			<table class="default">
				<tr>
					<td>
						<div class="card-content table-responsive">
							<a href="index.php?view=newpacient" class="btn btn-default"><i class='fa fa-male'></i> Registrar Persona</a>

						</div>
					</td>

					<td>
						<div class="card-content table-responsive">
							<a href="index.php?view=newpacient" class="btn btn-default"><i class='fa fa-male'></i> Modificar Persona</a>
						</div>
					</td>

					<td>
						<div class="card-content table-responsive">
							<a href="index.php?view=newpacient" class="btn btn-default"><i class='fa fa-male'></i> Eliminar Persona</a>
						</div>
					</td>

				</tr>
			</table>
			
			<hr>
			<h4 class="subtitle">Todos los Registros</h4>


			<div class="card-content table-responsive">

				<?php

				$users = PacientData::getAll();
				if (count($users) > 0) {
					// si hay usuarios
				?>

					<table class="table table-bordered table-hover">
						<thead>
							<th>Nombre completo</th>
							<th>Direccion</th>
							<th>Email</th>
							<th>Telefono</th>
							<th></th>
						</thead>
						<?php
						foreach ($users as $user) {
						?>
							<tr>
								<td><?php echo $user->first_name . " " . $user->first_lastname; ?></td>
								<td><?php echo $user->address; ?></td>
								<td><?php echo $user->email; ?></td>
								<td><?php echo $user->phone; ?></td>
								<td style="width:280px;">
									<a href="index.php?view=pacienthistory&id=<?php echo $user->id; ?>" class="btn btn-default btn-xs">Historial</a>
									<a href="index.php?view=editpacient&id=<?php echo $user->id; ?>" class="btn btn-warning btn-xs">Editar</a>
									<a href="index.php?view=delpacient&id=<?php echo $user->id; ?>" class="btn btn-danger btn-xs">Eliminar</a>
								</td>
							</tr>
						<?php

						}
						?>
					</table>
			</div>
		</div>
	<?php
				} else {
					echo "<p class='alert alert-danger'>No hay pacientes</p>";
				}
	?>

	</div>


</div>




</div>
</div>