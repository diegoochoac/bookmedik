<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Validar Persona</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cedula*</label>
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




  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="primernombre" required class="form-control" id="id_primernombre" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre</label>
    <div class="col-md-6">
      <input type="text" name="segundonombre"  class="form-control" id="id_segundonombre" placeholder="">
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
      <input type="text" name="segundoapellido"  class="form-control" id="id_segundoapellido" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edad</label>
    <div class="col-md-6">
      <input type="text" name="edad"  class="form-control" id="id_edad" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento</label>
    <div class="col-md-6">
      <input type="text" name="departamento"  class="form-control" id="id_departamento" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Municipio</label>
    <div class="col-md-6">
      <input type="text" name="municipio"  class="form-control" id="id_municipio" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono Fijo</label>
    <div class="col-md-6">
      <input type="text" name="telefonofijo"  class="form-control" id="id_telefonofijo" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono Celular</label>
    <div class="col-md-6">
      <input type="text" name="telefonocelular"  class="form-control" id="id_telefonocelular" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado RUV</label>
    <div class="col-md-6">
      <input type="text" name="estadoruv"  class="form-control" id="id_estadoruv" placeholder="">
    </div>
  </div>

  <!-- <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Buscar Persona</button>
    </div>
  </div> -->

</form>
</div>
</div>
	</div>
</div>