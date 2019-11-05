<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 73px;">
  <div class="container">
    <a class="btn btn-success mt-auto" id="btnConsultarDoacao" data-toggle="modal" href="#modalConsulta" >Consultar Doação</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="dropdown">
          <span class="fa fa-cart-plus my-2" id="overCart" style="font-size: 25px;"
            role="button" id="dropdownMenuLink" data-toggle="xxxdropdown" aria-haspopup="true" aria-expanded="true"></span>
          <span class="badge badge-warning mr-4" id="countCart"><?= $countCart ?></span>


          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="btn btn-success" id="btnFinalizaDoacao" href="#modalDoador" >Fazinalizar Doação</a>
      </li>
    </ul>
    
  </div>
</nav>

<?php foreach ($movimentos as $key => $mov) : ?>
<!-- Icons Grid -->
  <section class="text-center pt-5" id="doacao">
    <div class="container">
      <h2 class="mb-5"><?= $mov->nome_fantasia ?></h2>
      <div class="row">
      	<?php foreach ($mov->beneficiados as $key1 => $benef) : ?>

        <div class="col-lg-6">
          <div class=" mx-auto mb-5 mb-lg-0 mb-lg-3">

            <div class="card">
              <?= form_open('Welcome/realizar_doacao', ['id' => 'id_'.$key.$key1]) ?>
                <div class="card-header">
                  <h5><?= $benef->benefeciado->nome_benef ?></h5>
                  <smal><?= $benef->benefeciado->caracteristicas ?></smal>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row text-left">
                      <?php foreach ($tipos as $key2 => $tipo): ?>
                      <div class="col-lg-4">
                        <p class="lead mb-0"> <?= $tipo->tipo ?> </p>
                        <p><smal> <?= $tipo->descricao ?> </smal></p>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input chkBtn" id="<?= 'chk_'.$key.$key1.$key2 ?>" 
                            data-id_tipo_doacao="<?= $tipo->id_tipo_doacao ?>" data-id_movimento="<?= $benef->id_movimento ?>" name="tipo_doacao" <?= isChecked($carts, $benef->id_movimento, $tipo->id_tipo_doacao) ?>>
                          <label class="custom-control-label" for="<?= 'chk_'.$key.$key1.$key2 ?>">Doar?</label>
                        </div>
                      </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              <?= form_close() ?>
            </div>
            
          </div>
        </div>

    	<?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endforeach; ?>


<div class="modal fade" id="modalDoador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informe seus dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?= form_open('api/createDoador', ['id' => 'createDoador']) ?>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" name="id_doador" id="id_doador">
          <label for="nr_rg_cpf" class="col-form-label">RG:</label>
          <input type="text" class="form-control rg" name="nr_rg_cpf" id="nr_rg_cpf" required>
        </div>
        <div class="form-group">
          <label for="nome_doador" class="col-form-label">Nome</label>
          <input type="text" class="form-control" name="nome_doador" id="nome_doador" required>
        </div>
        <div class="form-group">
          <label for="telefone" class="col-form-label">Telefone:</label>
          <input type="text" class="form-control" name="telefone" id="telefone" required>
        </div>
        <div class="form-group">
          <label for="email" class="col-form-label">E-mail:</label>
          <input type="text" class="form-control" name="email" id="email" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Doar</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<div class="modal fade" id="modalMensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LabelMenssagem"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consulte sua doação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-row align-items-end">
          <div class="col-sm-6 my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">RG</div>
              </div>
              <input type="text" class="form-control rg" name="nr_rg_cpf" id="rgConsulta" required>
            </div>
          </div>
          <div class="col-auto my-1">
            <button type="button" class="btn btn-primary" id="btnConsultar">Consultar</button>
          </div>
        </div>
        <small id="msgErro" class="form-text text-muted"></small>
        
        <div class="mt-5" id="tabelaDoacao">
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>