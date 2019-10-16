<?php foreach ($movimentos as $mov) : ?>
<!-- Icons Grid -->
  <section class="text-center mt-5 pt-5" id="doacao">
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
			    <smal><?= $benef->benefeciado->caracteristicas ?></smal>
			  </div>
			  <div class="card-body">
			  	<div class="container">
			  		<div class="row text-left">
			  			<?php foreach ($tipos as $tipo): ?>
					  	<div class="col-lg-4">
					  		<p class="lead mb-0"> <?= $tipo->tipo ?> </p>
					  		<p><smal> <?= $tipo->descricao ?> </smal></p>
						  	<div class="custom-control custom-switch">
							  <input type="checkbox" class="custom-control-input" id="<?= $tipo->tipo ?>">
							  <label class="custom-control-label" for="<?= $tipo->tipo ?>">Doar?</label>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			  </div>
			  <div class="card-footer">
			  	<button class="btn btn-danger btn-sm" type="submit">Finalizar a Doaçao</button>
			  </div>
			</div>

          </div>

        </div>

    	<?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endforeach; ?>