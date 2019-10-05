
    <?php if (empty($hash)) : ?>
      <?= form_open("accounts/forgot", array("class" => "form-signin", "id" => "formForgot", "style" => "min-width: 375px")) ?> 
        <img class="mb-4 text-center" src="<?= base_url("assets/images/apple-touch-icon.png") ?>" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Redefiniçao de senha</h1>
        
        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input type="email" id="email" class="form-control" placeholder="Endereço de E-mail" name="email" required autofocus>
        <p class="text-muted"><small>Enviaremos o link de redefinição de senha para seu e-mail.</small></p>        

        <button class="btn btn-lg btn-block btn-primary" type="submit">Solicitar</button>
        <a class="btn btn-lg btn-block btn-light" href="<?= base_url('accounts/login') ?>">Retornar ao Login</a>
      </form>
     </div>

    <?php else : ?>
    <div class="flex-column m-auto">
      <div class="alert alert-success alert-dismissible fade show " role="alert">
        <strong>Oloco, meu!</strong> Logout foi realizado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   

      <?= form_open("accounts/forgot/$hash", array("class" => "form-signin", "id" => "formForgot", "style" => "min-width: 375px")) ?>
        <input type="hidden" id="hash" name="hash" value="<?= $hash ?>">

        <img class="mb-4 text-center" src="<?= base_url("assets/images/apple-touch-icon.png") ?>" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Redefinir sua Senha</h1>

        <label for="inputPassword" class="sr-only">Nova Senha</label>
        <input type="password" id="senha" class="form-control" placeholder="Password" name="senha" required="">
        <p class="text-muted"><small>Agora esta será sua nova senha.</small></p>

        <button class="btn btn-lg btn-primary btn-block" type="submit" id="enterAccount">Redefinir</button>

      </form>
     </div>
    <?php endif; ?>