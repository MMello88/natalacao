<?php foreach ($movimentos as $mov) : ?>
<!-- Icons Grid -->
  <section class="features-icons text-center p-5 m-5" id="doacao">
    <div class="container">
      <h2 class="mb-5"><?= $mov->nome_fantasia ?></h2>
      <div class="row">
      	<?php foreach ($mov->beneficiados as $benef) : ?>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class=" m-auto text-primary"></i>
            </div>
            <h5><?= $benef->benefeciado->nome_benef ?></h5>
            <p class="lead mb-0"><?= $benef->benefeciado->caracteristicas ?></p>
            <input type="hidden" name="id_movimento" value="<?= $benef->id_movimento ?>">
          </div>
        </div>

    	<?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endforeach; ?>