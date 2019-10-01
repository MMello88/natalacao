<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Resetar Password | Matilab </title>
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
    <main class="auth">
      <?php if (empty($hash)) : ?>
        <!-- form -->
        <?= form_open("accounts/forgot", array("class" => "auth-form auth-form-reflow", "id" => "formForgot")) ?>
          <div class="text-center mb-4">
            <div class="mb-4">
              <img class="rounded" src="<?= base_url_template("apple-touch-icon.png") ?>" alt="" height="72">
            </div>
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
            <a href="<?= base_url('accounts') ?>" class="btn btn-block btn-light">Retornar para Loginho</a>
          </div>
        </form><!-- /.auth-form -->
      <?php else : ?>
        <!-- form -->
        <?= form_open("accounts/forgot/$hash", array("class" => "auth-form auth-form-reflow", "id" => "formForgot")) ?>
          <input type="hidden" id="hash" name="hash" value="<?= $hash ?>">
          <div class="text-center mb-4">
            <div class="mb-4">
              <img class="rounded" src="<?= base_url_template("apple-touch-icon.png") ?>" alt="" height="72">
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
            <a href="<?= base_url('accounts') ?>" class="btn btn-block btn-light">Retornar para Loginho</a>
          </div>
        </form><!-- /.auth-form -->
      <?php endif; ?>
      <footer class="auth-footer mt-5"> © 2018 All Rights Reserved. <a href="#">Privacy</a> and <a href="#">Terms</a>
      </footer>
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