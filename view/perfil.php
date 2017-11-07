<main>
	<div class="container row">
		<div class="col-sm-4"></div>
		<div class="jumbotron col-sm-7 align-center sombreado">
			<p><b><h2><?= $docente->getNombre() . " " . $docente->getApellido(); ?> </h2></b></p>
			<div class="row">
				<div class="col-sm-12">
					<p class="align-center"><?= $docente->getOCategoria()->getDescripcion(); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<p><b>Email 1:</b> <h5><?= $docente->getEmail(); ?></h5></p>
				</div>
				<div class="col-sm-6">
					<p><b>Email 2:</b> <h5><?= $docente->getTelefono(); ?></h5></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label><b>Antecedentes</b></label>
					<p><?= $docente->getDescripcion(); ?></p>
				</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</main>
