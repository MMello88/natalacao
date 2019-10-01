      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i> Continuação </a>
                    </li>
                  </ol>
                </nav>
                <h1 class="page-title"> Passo a Passo </h1>
                <p class="text-muted"> Falta bem pouco. Estamos quase finalizando. </p>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- Default Steps -->
                  <!-- .bs-stepper -->
                  <div id="stepper" class="bs-stepper">
                    <!-- .card -->
                    <div class="card">
                      <!-- .card-header -->
                      <div class="card-header">
                        <!-- .steps -->
                        <div class="steps steps-" role="tablist">
                          <ul>
                            <li class="step <?= $_usuario->email_valid == '1' ? 'success' : '' ?>" data-target="#test-l-1">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-envelope-open"></i></span> <span class="d-none d-sm-inline">Validar E-mail</span></a>
                            </li>
                            <li class="step" data-target="#test-l-2">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-account-login"></i></span> <span class="d-none d-sm-inline">Dados da Conta</span></a>
                            </li>
                            <li class="step" data-target="#test-l-3">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-person"></i></span> <span class="d-none d-sm-inline">Perfil</span></a>
                            </li>
                            <li class="step" data-target="#test-l-4">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-check"></i></span> <span class="d-none d-sm-inline">Confirmar</span></a>
                            </li>
                          </ul>
                        </div><!-- /.steps -->
                      </div><!-- /.card-header -->
                      <!-- .card-body -->
                      <div class="card-body">
                        <?= form_open("accounts/validate_hash_email", array("class" => "form", "id" => "formAccountHashEmail")) ?>
                          <!-- .content -->
                          <div id="test-l-1" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Informe a Chave de Segurança encaminha em seu E-mail</legend> <!-- .custom-control -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="hidden" name="email" value="<?= $_usuario->email ?>" form="formAccountHashEmail">
                                  <input type="text" id="hash_email" class="form-control" name="hash_email" value="" data-parsley-group="fieldset02" placeholder="Chave de Segurança" form="formAccountHashEmail" required=""> <label for="hash_email">Chave de Segurança</label>
                                </div>
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <div class="d-flex">
                                <button type="button" class="next btn btn-primary ml-auto" data-validate="fieldset03">Next step</button>
                              </div>
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?>
                        <?= form_open("accounts/change_name", array("class" => "p-lg-4 p-sm-3 p-0", "id" => "stepper-form", "name" => "stepperForm")) ?>
                          <!-- .content -->
                          <div id="test-l-2" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Detalhes da sua conta</legend> <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="text" id="inputNome" name="nome" class="form-control" value="<?= $_usuario->nome ?>" form="stepper-form" autocomplete="off" data-parsley-group="fieldset01" required=""> <label for="inputNome">Nome Completo</label>
                                </div>
                              </div><!-- /.form-group -->
                              <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="hidden" name="email" value="<?= $_usuario->email ?>" form="stepper-form" data-parsley-group="fieldset01">
                                  <input type="email" id="email" class="form-control" value="<?= $_usuario->email ?>" form="stepper-form" autocomplete="off" data-parsley-group="fieldset01" disabled=""> <label for="email">E-mail</label>
                                </div>
                              </div><!-- /.form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <div class="invalid-feedback show"> Por favor entre com nome de Super Usuário. </div>
                                </div>
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <!-- .d-flex -->
                              <div class="d-flex">
                                <button type="button" class="prev btn btn-secondary">Previous</button>
                                <button type="button" class="next btn btn-primary ml-auto" form="stepper-form" data-validate="fieldset01">Next step</button>
                              </div><!-- /.d-flex -->
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?>
                        <?= form_open("accounts/change_perfil", array("class" => "form", "id" => "formAccountContinue")) ?>
                          <!-- .content -->
                          <div id="test-l-3" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Informação do Perfil</legend> <!-- .row -->
                              <div class="row">
                                <!-- grid column -->
                                <div class="col-md-6 mb-4">
                                  <div class="form-label-group">
                                    <input type="date" id="dt_nascimento" class="form-control" name="dt_nascimento" value="<?= empty($_usuario->dt_nascimento) ? '' : date("Y-m-d",strtotime($_usuario->dt_nascimento)) ?>" data-parsley-group="fieldset02" required=""> 
                                  </div>
                                  <div class="invalid-feedback"> Data inválida. </div>
                                </div><!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-md-6 mb-4">
                                  <div class="form-label-group">
                                    <input type="text" id="celular" class="form-control" name="celular" value="<?= $_usuario->celular?>" data-parsley-group="fieldset02" placeholder="Numero de Celular" required=""> <label for="celular">Numero de Celular</label>
                                  </div>
                                  <div class="invalid-feedback"> Numero de Celular Inválido. </div>
                                </div><!-- /grid column -->
                              </div><!-- /.row -->
                              <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="text" id="super_usuario" class="form-control" name="super_usuario" value="<?= $_usuario->super_usuario?>" data-parsley-group="fieldset02" placeholder="@Super Usuário" required=""> <label for="super_usuario">@Super Usuário</label>
                                </div>
                                <div class="invalid-feedback"> Por favor entre com nome de Super Usuário. </div>
                              </div><!-- /.form-group -->
                              <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="custom-control custom-radio mb-4">
                                  <input type="radio" id="customRadioSexoMasculino" class="custom-control-input" name="sexo" value="m" required="" <?= $_usuario->sexo == "m" ? "checked" : "" ?>> <label class="custom-control-label" for="customRadioSexoMasculino">Masculino</label> <!-- .custom-control-hint -->
                                </div><!-- /.custom-control -->
                                <!-- .custom-control -->
                                <div class="custom-control custom-radio mb-4">
                                  <input type="radio" id="customRadioSexoFeminino" class="custom-control-input" name="sexo" value="f" <?= $_usuario->sexo == "f" ? "checked" : "" ?>> <label class="custom-control-label" for="customRadioSexoFeminino">Feminino</label> <!-- .custom-control-hint -->
                                </div>
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <div class="d-flex">
                                <button type="button" class="prev btn btn-secondary">Previous</button> <button type="button" class="next btn btn-primary ml-auto" data-validate="fieldset02">Next step</button>
                              </div>
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?>
                        <?= form_open("accounts/validate_cadastro", array("class" => "form", "id" => "formAccountTerms")) ?>
                          <!-- .content -->
                          <div id="test-l-4" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Terms Agreement</legend> <!-- .card -->
                              <div class="card bg-light">
                                <div class="card-body overflow-auto" style="height: 260px">
                                  <p> Ad vero quidem sit magni, sed eum laudantium, alias, consequuntur commodi eveniet nesciunt debitis esse sint temporibus id magnam accusamus perferendis laborum? Nobis ducimus minus blanditiis voluptates et, eligendi laborum. Ea suscipit, aperiam libero id dicta quia architecto iusto tenetur, dignissimos veritatis adipisci et! Recusandae impedit repudiandae, quam sunt repellat quia iusto tempora temporibus alias deleniti, nulla? Laborum expedita optio quam quasi, esse magni sit tempore! </p>
                                  <p> Dicta asperiores ea voluptatum nihil quasi, officia tempora voluptates. Quidem reprehenderit nesciunt culpa, architecto iure, neque itaque suscipit, iusto, porro ipsum consequatur! </p>
                                  <p> Ad vero quidem sit magni, sed eum laudantium, alias, consequuntur commodi eveniet nesciunt debitis esse sint temporibus id magnam accusamus perferendis laborum? Nobis ducimus minus blanditiis voluptates et, eligendi laborum. Ea suscipit, aperiam libero id dicta quia architecto iusto tenetur, dignissimos veritatis adipisci et! Recusandae impedit repudiandae, quam sunt repellat quia iusto tempora temporibus alias deleniti, nulla? Laborum expedita optio quam quasi, esse magni sit tempore! </p>
                                  <p> Dicta asperiores ea voluptatum nihil quasi, officia tempora voluptates. Quidem reprehenderit nesciunt culpa, architecto iure, neque itaque suscipit, iusto, porro ipsum consequatur! </p>
                                </div>
                              </div><!-- /.card -->
                              <!-- .form-group -->
                              <div class="form-group">
                                <!-- .custom-control -->
                                <div class="custom-control custom-checkbox">
                                  <input type="hidden" name="email" value="<?= $_usuario->email ?>" form="formAccountTerms">
                                  <input type="checkbox" id="agreement" name="agreement" class="custom-control-input" data-parsley-group="agreement" required="True"> <label class="custom-control-label" for="agreement">Agree to terms and conditions</label>
                                </div><!-- /.custom-control -->
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <div class="d-flex">
                                <button type="button" class="prev btn btn-secondary">Previous</button> <button type="button" class="submit btn btn-primary ml-auto" data-validate="agreement">Submit</button>
                              </div>
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.bs-stepper -->
                </div><!-- /.section-block -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->