<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign out success | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Sign out success">
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
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url_template("assets/apple-touch-icon.png") ?>">
    <link rel="shortcut icon" href="<?= base_url_template("assets/favicon.ico") ?>">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url_template_vendor("fontawesome/css/all.css") ?>"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="<?= base_url_template_stylesheets("theme.min.css") ?>" data-skin="default">
    <link rel="stylesheet" href="<?= base_url_template_stylesheets("theme-dark.min.css") ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url_template_stylesheets("custom.css") ?>"><!-- Disable unused skin immediately -->
    <script> var skin = localStorage.getItem('skin') || 'default';
      var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

      unusedLink.setAttribute('rel', '');
      unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth auth-floated">
      <!-- form -->
      <?= form_open("accounts/accounts", array("class" => "auth-form", "id" => "formAccounts")) ?>
        <div class="mb-4">
          <div class="mb-3">
            <img class="rounded" src="<?= base_url_template("apple-touch-icon.png") ?>" alt="" height="72">
          </div>
          <h1 class="h3"> Sign In </h1>
        </div>
        <p class="text-left mb-4"> Não tem uma conta? <a href="<?= base_url('accounts/register') ?>">Crie sua conta</a>
        </p><!-- .form-group -->
        <div class="form-group mb-4">
          <label class="d-block text-left" for="inputUser">Username</label> <input type="email" id="inputUser" class="form-control form-control-lg" autocomplete="current-password" name="email" placeholder="Enter E-mail" required="" autofocus="">
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group mb-4">
          <label class="d-block text-left" for="inputPassword">Password</label> <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" name="senha" required="">
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group mb-4">
          <button class="btn btn-lg btn-primary btn-block" id="enterAccount" type="submit">Logar</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="lembrar" id="remember-me"> <label class="custom-control-label" for="remember-me">Manter-me Logado</label>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <p class="py-2">
          <a href="<?= base_url('accounts/forgot') ?>" class="link">Esqueceu Password?</a>
        </p><!-- /recovery links -->
        <!-- copyright -->
        <p class="mb-0 px-3 text-muted text-center"> © 2019 All Rights Reserved. <a href="#">Privacy</a> and <a href="#">Terms</a>
        </p>
      </form><!-- /.auth-form -->
      <!-- .auth-announcement -->
      <div id="announcement" class="auth-announcement" style="background-image: url(<?= base_url_template_images("illustration/img-1.png") ?>);">
        <div class="announcement-body">
          <h2 class="announcement-title"> Como se preparar para um futuro automatizado? </h2><a href="#" class="btn btn-warning"><i class="fa fa-fw fa-angle-right"></i> Aguardamos sua volta.</a>
        </div>
      </div><!-- /.auth-announcement -->
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="<?= base_url_template_vendor("jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url_template_vendor("bootstrap/js/popper.min.js") ?>"></script>
    <script src="<?= base_url_template_vendor("bootstrap/js/bootstrap.min.js") ?>"></script> <!-- END BASE JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url_template_javascript("theme.min.js") ?>"></script> <!-- END THEME JS -->
    <script src="<?= base_url_webapp_js("accounts.js") ?>" ></script>
  </body>
</html>