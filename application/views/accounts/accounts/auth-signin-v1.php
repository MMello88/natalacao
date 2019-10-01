<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign In | Matilab </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Matheus de Mello">
    <meta property="og:locale" content="pt_BR">
    <meta name="description" content="Gerencie seu tempo, seus projetos e sua vida.">
    <meta property="og:description" content="Gerencie seu tempo, seus projetos e sua vida.">
    <link rel="canonical" href="http://matilab.com.br">
    <meta property="og:url" content="http://matilab.com.br">
    <meta property="og:site_name" content="Matilab - Seu Gerenciamento seu tempo!">
    <script type="application/ld+json">
      {
        "name": "Matilab - Seu Gerenciamento seu tempo!",
        "description": "Gerencie seu tempo, seus projetos e sua vida.",
        "author":
        {
          "@type": "Matheus",
          "name": "Matheus de Mello"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Sign In",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <script>
      var base_url = "<?= base_url(); ?>";
    </script>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url("assets/images/apple-touch-icon.png") ?>">
    <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.ico") ?>">
    <meta name="theme-color" content="#3063A0">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url_webapp("css/master.css") ?>">

  </head>
  <body>
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

    <script src="<?= base_url_webapp("js/componentes/bootstrap/jquery.min.js") ?>"></script>
    <script src="<?= base_url_webapp("js/componentes/bootstrap/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url_webapp("js/componentes/bootstrap/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url_webapp("js/accounts.js") ?>" ></script>
  </body>
</html>