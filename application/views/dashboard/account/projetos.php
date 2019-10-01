                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Modulos </h6><!-- .card-body -->
                      <div class="card-body">
                        <!-- form -->
                        <?= form_open("accounts/save_settings_profile", array("id" => "formSaveSettingsProfile")) ?>
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input04" class="col-md-4">Disponível para contratação?</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-8 mb-3">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="contratacao" class="custom-control-input" id="input04" <?= $_usuario->contratacao == "1" ? "checked" : "" ?> > <label class="custom-control-label" for="input04">Sim, contrate-me </label>
                              </div>
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input04" class="col-md-4">Disponível para contratação?</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-8 mb-3">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="contratacao" class="custom-control-input" id="input04" <?= $_usuario->contratacao == "1" ? "checked" : "" ?> > <label class="custom-control-label" for="input04">Sim, contrate-me </label>
                              </div>
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <button type="button" class="btn btn-primary ml-auto sendToSave">Contratar?</button>
                          </div><!-- /.form-actions -->
                        <?= form_close() ?>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                    <!-- .card -->
                  </div><!-- /grid column -->