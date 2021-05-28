<?php
$pacient = PacientData::getById($_GET["id"]);
?>
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
				<h4 class="title">Historial de Citas del Paciente</h4>
				<p>Paciente: <?php echo $pacient->name . " " . $pacient->lastname; ?></p>
			</div>
			
		</div>
	


	</div>
</div>