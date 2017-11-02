<main>
	<div class="container row">
		<div class="col-sm-4"></div>
		<div class="jumbotron col-sm-6 align-center">
			<p><b><h2><?php echo $docente[0]['nombre']." ".$docente[0]['apellido'];?></h2></b></p>
			<div class="row">
				<div class="col-sm-12">
					<p class="align-center"><?php echo $docente[0]['categoria'];?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<p><b>Email:</b> <h5><?php echo $docente[0]['email']; ?></h5></p>
				</div>
				<div class="col-sm-6">
					<p><b>Tel:</b> <h5><?php echo $docente[0]['telefono'];?></h5></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label><b>Antecedentes</b></label>
					<p><?php echo $docente[0]['descripcion'];?></p>
				</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</main>