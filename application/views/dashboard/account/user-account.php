                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Account </h6><!-- .card-body -->
                      <div class="card-body">
                        <!-- form -->
                        <?= form_open("accounts/change_perfil") ?>
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                              <label for="input01">Nome</label> <input type="text" class="form-control" name="nome" value="<?= $_usuario->nome ?>" required="">
                            </div><!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                              <label for="input02">Data de Nascimento</label> <input type="date" class="form-control" name="dt_nascimento" value="<?= empty($_usuario->dt_nascimento) ? '' : date("Y-m-d",strtotime($_usuario->dt_nascimento)) ?>" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                              <label for="input01">Celular</label> <input type="text" class="form-control" name="celular" value="<?= $_usuario->celular ?>" required="">
                            </div><!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-6 mb-3 mt-3 p-3">
                              <!-- form row -->
                              <div class="form-row">
                                <!-- .custom-control -->
                                <div class="custom-control custom-radio mr-5">
                                  <input type="radio" id="customRadioSexoMasculino" class="custom-control-input" name="sexo" value="m" required="" <?= $_usuario->sexo == "m" ? "checked" : "" ?>> <label class="custom-control-label" for="customRadioSexoMasculino">Masculino</label> <!-- .custom-control-hint -->
                                </div><!-- /.custom-control -->
                                <!-- .custom-control -->
                                <div class="custom-control custom-radio mr-5">
                                  <input type="radio" id="customRadioSexoFeminino" class="custom-control-input" name="sexo" value="f" <?= $_usuario->sexo == "f" ? "checked" : "" ?>> <label class="custom-control-label" for="customRadioSexoFeminino">Feminino</label> <!-- .custom-control-hint -->
                                </div><!-- /.custom-control -->
                              </div><!-- /form row -->
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label for="input03">Email</label> <input type="email" class="form-control" name="email" value="<?= $_usuario->email ?>" required="" disabled="">
                          </div><!-- /.form-group -->
                          <div class="form-group">
                            <label for="input05">Super Usuário</label> <input type="text" class="form-control" value="<?= $_usuario->super_usuario ?>" disabled=""> <small class="text-muted"></small>
                            <input type="hidden" name="super_usuario" value="<?= $_usuario->super_usuario?>">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label for="input04">New Password</label> <input type="password" class="form-control" minlength="6" name="senha_new" value="">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <!-- enable submit btn when user type their current password -->
                            <input type="password" name="senha_old" class="form-control mr-3" minlength="6" placeholder="Entra senha atual"> <button type="button" class="btn btn-primary text-nowrap ml-auto sendToSave clearPass">Alterar Conta</button>
                          </div><!-- /.form-actions -->
                        <?= form_close() ?><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->