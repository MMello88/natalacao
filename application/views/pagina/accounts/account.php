    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url("assets/images/apple-touch-icon.png") ?>" width="30" height="30" class="d-inline-block align-top" alt="">
        <?= nome_projeto() ?>
      </a>
    </nav>
    <div class="container mt-5">
      <div class="row col-12 justify-content-center">
          <?= form_open("accounts/accounts", array("class" => "col-12 col-sm-12 col-lg-6", "id" => "formAccounts")) ?>
          <!-- .form-group -->
          <div class="form-group">
            <div class="form-label-group">
              <label for="inputUser">E-mail</label>
              <input type="email" id="inputUser" class="form-control" autocomplete="current-password" name="email" placeholder="Enter E-mail" required="" autofocus="">
            </div>
          </div><!-- /.form-group -->
          <!-- .form-group -->
          <div class="form-group">
            <div class="form-label-group">
              <label for="inputPassword">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha" required="">
            </div>
          </div><!-- /.form-group -->
          <!-- .form-group -->
          <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" id="enterAccount" type="submit">Logar</button>
          </div><!-- /.form-group -->
          <!-- .form-group -->
          <div class="form-group text-center">
            <div class="custom-control custom-control-inline custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lembrar" id="remember-me"> <label class="custom-control-label" for="remember-me">Manter-me Logado</label>
            </div>
          </div><!-- /.form-group -->
          <!-- recovery links -->
          <div class="text-center pt-3">
            <a href="<?= base_url('accounts/forgot') ?>" class="link">Esqueceu Password?</a>
          </div><!-- /recovery links -->
        </form><!-- /.auth-form -->
      </div>
    </div>