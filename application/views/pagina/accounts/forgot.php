    <div class="container mt-5">
      <div class="row col-12 justify-content-center">
        <?php if (empty($hash)) : ?>
          <!-- form -->
          <?= form_open("accounts/forgot", array("class" => "auth-form auth-form-reflow", "id" => "formForgot")) ?>
            <div class="text-center mb-4">
              <h1 class="h3"> Resetar seu Password </h1>
            </div>
            <div class="form-group mb-4">
              <label class="d-block text-left" for="email">E-mail</label> <input type="email" id="email" name="email" class="form-control form-control-lg" required="" autofocus="">
              <p class="text-muted">
                <small>Enviaremos o link de redefinição de senha para seu e-mail.</small>
              </p>
            </div><!-- /.form-group -->
            <!-- actions -->
            <div class="d-block d-md-inline-block mb-2">
              <button class="btn btn-lg btn-block btn-primary" type="submit">Resetar Password</button>
            </div>
            <div class="d-block d-md-inline-block">
              <a href="<?= base_url('accounts/login') ?>" class="btn btn-lg btn-block btn-light">Retornar ao Login</a>
            </div>
          </form><!-- /.auth-form -->
        <?php else : ?>
          <!-- form -->
          <?= form_open("accounts/forgot/$hash", array("class" => "auth-form auth-form-reflow", "id" => "formForgot")) ?>
            <input type="hidden" id="hash" name="hash" value="<?= $hash ?>">
            <div class="text-center mb-4">
              <div class="mb-4">
                <img class="rounded" src="<?= base_url("apple-touch-icon.png") ?>" alt="" height="72">
              </div>
              <h1 class="h3"> Digite seu novo Password </h1>
            </div>
            <div class="form-group mb-4">
              <label class="d-block text-left" for="email">Password</label> <input type="password" id="senha" name="senha" class="form-control form-control-lg" required="" autofocus="">
              <p class="text-muted">
                <small>Agora esta será a sua nova senha.</small>
              </p>
            </div><!-- /.form-group -->
            <!-- actions -->
            <div class="d-block d-md-inline-block mb-2">
              <button class="btn btn-lg btn-block btn-primary" type="submit">Resetar Password</button>
            </div>
            <div class="d-block d-md-inline-block">
              <a href="<?= base_url('accounts/login') ?>" class="btn btn-lg btn-block btn-light">Retornar ao Login</a>
            </div>
          </form><!-- /.auth-form -->
        <?php endif; ?>
      </div>
    </div>