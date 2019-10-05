    <div class="flex-column m-auto">
      <div class="alert alert-success alert-dismissible fade show " role="alert">
        <strong>Oloco, meu!</strong> Logout foi realizado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   

      <?= form_open("accounts/accounts", array("class" => "form-signin", "id" => "formAccounts", "style" => "min-width: 375px")) ?> 
        <img class="mb-4 text-center" src="<?= base_url("assets/images/apple-touch-icon.png") ?>" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Por Favor Entre</h1>
        
        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input type="email" id="inputUser" class="form-control" placeholder="Endereço de E-mail" name="email" required autofocus>
        
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha" required="">

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" name="lembrar" id="remember-me"> Manter-me Logado
          </label>
        </div>


        <button class="btn btn-lg btn-primary btn-block" type="submit" id="enterAccount">Login</button>

        <div class="pt-3">
          <a href="<?= base_url('accounts/forgot') ?>" class="link">Esqueceu Password?</a>
        </div>
      </form>
     </div>