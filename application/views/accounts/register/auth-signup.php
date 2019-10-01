<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Crie sua Conta | Matilab </title>
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
      <header id="auth-header" class="auth-header" style="background-image: url(<?= base_url_template_images("illustration/img-1.png") ?>);">
        <h1>
          <img src="<?= base_url_template_images("brand-inverse.png") ?>" alt="" height="72"> <span class="sr-only">Logar</span>
        </h1>
        <p> Já tem uma conta? Por favor <a href="<?= base_url('accounts') ?>">Logar</a>
        </p>
      </header><!-- form -->
      <?= form_open("register", array("class" => "auth-form", "id" => "formRegisterAccount")) ?>
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="" autofocus=""> <label for="nome">Nome Completo</label>
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required=""> <label for="email">Email</label>
          </div>
        </div><!-- /.form-group -->
        
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Password" required=""> <label for="senha">Password</label>
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" class="form-control" id="resenha" name="resenha" placeholder="Confirmar Password" required=""> <label for="resenha">Confirmar Password</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <!-- recovery links -->
        <p class="text-center text-muted mb-0"> Ao criar uma conta, você concorda com o <a href="#">Termo de Uso</a> e <a href="#">Política de Privacidade</a>. </p><!-- /recovery links -->
      </form><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © 2018 All Rights Reserved. </footer>
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