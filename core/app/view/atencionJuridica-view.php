<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">

		</div>
		<div class="card">
			<div class="card-header" data-background-color="blue">
				<h4 class="title">Asesoria Juridica</h4>
			</div>

			<div class="card-content table-responsive">

				<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">



					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Tipo de Documento*</label>
						<select class="form-control" name="documento" id="id_documento">
							<!-- <option selected>Seleccione tipo de documento</option> -->
							<option value="1">Cedula de Ciudadania</option>
							<option value="2">Tarjeta de Identidad</option>
							<option value="3">Acta de Nacimiento</option>
							<option value="4">Acta de Nacimiento</option>
							<option value="5">Acta de Nacimiento</option>
						</select>
					</div>


					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Numero Documento*</label>
						<div class="col-md-6">
							<input type="text" name="cedula" class="form-control" id="id_cedula" placeholder="Ingrese número de cedula a buscar">
						</div>

						<div class="col-lg-offset-2 col-lg-10">
							<button type="submit" class="btn btn-primary">Buscar Persona</button>
						</div>

						<!-- Se realiza la busqueda de la informacion por el numero de cedula -->
						<?php
						$users = PacientData::getCedula(1234);


						?>

					</div>

					<hr>


					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Fecha*</label>
						<div class="col-md-6">
							<input type="date" name="fecha" required class="form-control" id="id_fecha" placeholder="Seleccione fecha">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Estado RUV</label>
						<div class="col-md-6">
							<input type="text" name="estadoruv" class="form-control" id="id_estadoruv" placeholder="">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
						<div class="col-md-6">
							<input type="text" name="primernombre" required class="form-control" id="id_primernombre" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre</label>
						<div class="col-md-6">
							<input type="text" name="segundonombre" class="form-control" id="id_segundonombre" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
						<div class="col-md-6">
							<input type="text" name="primerapellido" required class="form-control" id="id_primerapelliido" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido</label>
						<div class="col-md-6">
							<input type="text" name="segundoapellido" class="form-control" id="id_segundoapellido" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Fecha Nacimiento</label>
						<div class="col-md-6">
							<input type="date" name="nacimiento" class="form-control" id="id_nacimiento" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Edad</label>
						<div class="col-md-6">
							<input type="text" name="edad" class="form-control" id="id_edad" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Etnia</label>
						<div class="col-md-6">
							<input type="text" name="etnia" class="form-control" id="id_etnia" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Genero</label>
						<div class="col-md-6">
							<input type="text" name="genero" class="form-control" id="id_genero" placeholder="">
						</div>
					</div>

					<hr>

					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Departamento</label>
						<div class="col-md-6">
							<input type="text" name="departamento" class="form-control" id="id_departamento" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Municipio</label>
						<div class="col-md-6">
							<input type="text" name="municipio" class="form-control" id="id_municipio" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Ubicacion</label>
						<div class="col-md-6">
							<input type="text" name="ubicacion" class="form-control" id="id_ubicacion" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Barrio-Vereda-Corregimiento</label>
						<div class="col-md-6">
							<input type="text" name="barrio" class="form-control" id="id_barrio placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
						<div class="col-md-6">
							<input type="text" name="direccion" class="form-control" id="id_direccion" placeholder="">
						</div>
					</div>

					<hr>

					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Correo Electronico</label>
						<div class="col-md-6">
							<input type="text" name="correo" class="form-control" id="id_correo" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Telefono Fijo</label>
						<div class="col-md-6">
							<input type="text" name="telefonofijo" class="form-control" id="id_telefonofijo" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Telefono Celular</label>
						<div class="col-md-6">
							<input type="text" name="telefonocelular" class="form-control" id="id_telefonocelular" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-2 control-label">Telefono Celular 2</label>
						<div class="col-md-6">
							<input type="text" name="telefonocelular" class="form-control" id="id_telefonocelular" placeholder="">
						</div>
					</div>

					<hr>









					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button type="submit" class="btn btn-primary">Agregar Novedad</button>
						</div>
					</div>

				</form>
			</div>

		</div>