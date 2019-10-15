<?php foreach ($movimentos as $mov) : ?>
<!-- Icons Grid -->
  <section class="features-icons text-center p-5 m-5" id="doacao">
    <div class="container">
      <h2 class="mb-5"><?= $mov->nome_fantasia ?></h2>
      <div class="row">
      	<?php foreach ($mov->beneficiados as $benef) : ?>

        <div class="col-lg-6">
          <div class=" mx-auto mb-5 mb-lg-0 mb-lg-3">
            <input type="hidden" name="id_movimento" value="<?= $benef->id_movimento ?>">

			<div class="card">
			  <div class="card-header">
			    <h5><?= $benef->benefeciado->nome_benef ?></h5>
			  </div>
			  <div class="card-body">
			  	<div class="container">
			  		<div class="row text-left">
					  	<div class="col-lg-4">
					  		<p class="lead mb-0"> Presente </p>
						  	<div class="custom-control custom-switch mb-auto">
							  <input type="checkbox" class="custom-control-input" id="customSwitch1">
							  <label class="custom-control-label" for="customSwitch1">Doar?</label>
							</div>
						</div>
					  	<div class="col-lg-4">
					  		<p class="lead mb-0"> Cesta Basica </p>
						  	<div class="custom-control custom-switch mb-auto">
							  <input type="checkbox" class="custom-control-input" id="customSwitch1">
							  <label class="custom-control-label" for="customSwitch1">Doar?</label>
							</div>
						</div>
					  	<div class="col-lg-4">
					  		<p class="lead mb-0"> Cesta material Limpeza </p>
						  	<div class="custom-control custom-switch mb-auto">
							  <input type="checkbox" class="custom-control-input" id="customSwitch1">
							  <label class="custom-control-label" for="customSwitch1">Doar?</label>
							</div>
						</div>
					</div>
				</div>
			  </div>
			  <div class="card-footer">
	         	<p class="lead mb-0">Caracteristicas:</p>
	            <p class="lead mb-0"><?= $benef->benefeciado->caracteristicas ?></p>
			  </div>
			</div>

          </div>

        </div>

    	<?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endforeach; ?>