<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Continue | Matilab </title>
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
      var base_url_template = "<?= base_url_template(); ?>";
      var base_url_template_images = "<?= base_url_template_images() ?>";
    </script>
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url_template("apple-touch-icon.png") ?>">
    <link rel="shortcut icon" href="<?= base_url_template("favicon.ico") ?>">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->

    <?php if(isset($main_submenu->submenu->output)) :
      foreach($main_submenu->submenu->output->css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?= $file; ?>" />
    <?php endforeach; endif; ?>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url_template_vendor("open-iconic/css/open-iconic-bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url_template_vendor("fontawesome/css/all.css") ?>"><!-- END PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url_template_vendor("toastr/toastr.min.css") ?>"><!-- END PLUGINS STYLES -->
    
    <?php if(isset($arrCss)) foreach ($arrCss as $css) { ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php } ?>
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="<?= base_url_template_stylesheets("theme.min.css") ?>" data-skin="default">
    <link rel="stylesheet" href="<?= base_url_template_stylesheets("theme-dark.min.css") ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url_template_stylesheets("custom.css") ?>"><!-- Disable unused skin immediately -->
    <?php if(isset($css_view_user) && $css_view_user == "settings") { ?>
    <link rel="stylesheet" href="<?= base_url_template_vendor("croppie/croppie.css") ?>">
    <?php } ?>
    
    <script> var skin = localStorage.getItem('skin') || 'default';
    var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

    unusedLink.setAttribute('rel', '');
    unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
      <!-- .app-header -->