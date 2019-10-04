<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign In | <?= nome_projeto() ?> </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Matheus de Mello">
    <meta property="og:locale" content="pt_BR">
    <script>
      var base_url = "<?= base_url(); ?>";
    </script>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url("assets/images/apple-touch-icon.png") ?>">
    <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.ico") ?>">
    <meta name="theme-color" content="#3063A0">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <?php if(isset($css_files)): ?>
    <?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php endif; ?>
    <link rel="stylesheet" href="<?= base_url_webapp("css/master.css") ?>">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow pb-2">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url("admin/") ?>">
          <img src="<?= base_url("assets/images/apple-touch-icon.png") ?>" width="30" height="30" class="d-inline-block align-top" alt="">
          <?= nome_projeto() ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url("admin/projetos") ?>">Trocar de Projeto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url("accounts/logout") ?>">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    
    <div class="navbar-collapse" id="navbarMenu">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
          <?php if(isset($projeto)) : ?>
            <h5 class="ml-2"><?= $projeto->projeto ?></h5>
          <?php endif; ?>
            <ul class="nav flex-column">
            <?php if(isset($menus)) foreach($menus as $menu): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url($menu->url) ?>">
                  <span data-feather="home"></span>
                  <?= $menu->menu ?>
                </a>
              </li>
            <?php endforeach; ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>