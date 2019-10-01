                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Billing Information </h6><!-- .card-body -->
                      <div class="card-body">
                        <!-- form -->
                        <form method="post">
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input01" class="col-md-3">First Name</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input01" value="Beni" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input02" class="col-md-3">Last Name</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input02" value="Arisandi" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input03" class="col-md-3">Country</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <select id="input03" class="custom-select">
                                <option value=""> Select your country </option>
                                <option value="id" selected> United States </option>
                              </select>
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input04" class="col-md-3">Address Line 1</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input04" value="5888 Mya Causeway Apt. 185" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input05" class="col-md-3">Address Line 2</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input05">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input06" class="col-md-3">City</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input06" value="Eldaside" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input07" class="col-md-3">Province / Region</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input07" value="Minnesota" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input08" class="col-md-3">Zip / Postal Code</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input08" value="97729" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <hr class="my-4">
                          <h4 class="card-title"> Payment </h4><!-- .custom-control -->
                          <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" name="input09" id="pmd1"> <label class="custom-control-label" for="pmd1">Credit card</label> <!-- .custom-control-hint -->
                            <div class="custom-control-hint">
                              <!-- form row -->
                              <div class="form-row">
                                <!-- form col -->
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="form-label-group">
                                      <input type="text" class="form-control" id="pm1" value="Dorian Feeney" placeholder="Name on card" required=""> <label for="pm1">Card holder</label>
                                    </div>
                                  </div>
                                </div><!-- /form col -->
                                <!-- form col -->
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="form-label-group">
                                      <input type="text" class="form-control" id="pm2" value="3129 0713 0072 6258" placeholder="XXXX XXXX XXXX XXXX" required=""> <label for="pm2">Card number</label>
                                    </div>
                                  </div>
                                </div><!-- /form col -->
                              </div><!-- /form row -->
                              <!-- form row -->
                              <div class="form-row">
                                <!-- form col -->
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <div class="form-label-group">
                                      <input type="text" class="form-control" id="pm3" value="01/20" placeholder="MM/YY" required=""> <label for="pm3">Exp. date</label>
                                    </div>
                                  </div>
                                </div><!-- /form col -->
                                <!-- form col -->
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <div class="form-label-group">
                                      <input type="text" class="form-control" id="pm4" value="123" placeholder="XXX" required=""> <label for="pm4">CVC</label>
                                    </div>
                                  </div>
                                </div><!-- /form col -->
                                <!-- form col -->
                                <div class="col-md-6">
                                  <!-- you can change attribute type to type="submit" on your real project -->
                                  <button type="button" class="btn btn-lg btn-primary btn-block">Save</button>
                                </div><!-- /form col -->
                              </div><!-- /form row -->
                            </div><!-- /.custom-control-hint -->
                          </div><!-- /.custom-control -->
                          <!-- .custom-control -->
                          <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" name="input09" id="pmd2" checked> <label class="custom-control-label" for="pmd2">Paypal</label> <!-- .custom-control-hint -->
                            <div class="custom-control-hint">
                              <div class="form-row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <div class="input-group h-auto">
                                      <div class="form-label-group">
                                        <input type="text" class="form-control" value="paypal@looper.com" readonly> <label>Personal account</label>
                                      </div>
                                      <div class="input-group-append ml-auto">
                                        <span class="input-group-text text-success"><strong>Connected</strong></span>
                                      </div>
                                    </div>
                                  </div><button class="btn btn-danger" type="button">Disconnect</button>
                                </div>
                              </div>
                            </div><!-- /.custom-control-hint -->
                          </div><!-- /.custom-control -->
                          <!-- .custom-control -->
                          <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" name="input09" id="pmd3"> <label class="custom-control-label" for="pmd3">Stripe</label> <!-- .custom-control-hint -->
                            <div class="custom-control-hint">
                              <button class="btn btn-primary" type="button">Connect with <strong><em>Stripe</em></strong></button>
                            </div><!-- /.custom-control-hint -->
                          </div><!-- /.custom-control -->
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary ml-auto">Update Billing</button>
                          </div><!-- /.form-actions -->
                        </form><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->