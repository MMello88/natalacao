<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> <?= $titulo ?> | <?= nome_projeto() ?> </title>
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
    <?php if(isset($arrCss)) foreach($arrCss as $css): ?>
    <link rel="stylesheet" href="<?= $css ?>">
    <?php endforeach; ?>
  </head>
  <body>

  <div class="d-flex bg-light" id="wrapper">

    <div class="bg-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-muted">
        <?php if(isset($projeto)) : ?>
            <h5 class="ml-2"><?= $projeto->projeto ?></h5>
          <?php endif; ?>
      </div>
      <div class="list-group list-group-flush">
        <?php if(isset($menus)) foreach($menus as $objmenu): ?>
        <a href="#<?= $objmenu->url ?>" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action text-muted">
          <div class="d-flex w-100 justify-content-end align-items-center">
            <span class="fa fa-dashboard fa-fw mr-3"></span> 
            <span class="menu-collapsed"><?= $objmenu->menu ?></span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
          <?php if(isset($objmenu->submenu)) foreach($objmenu->submenu as $submenu): ?>
          <!-- Submenu content -->
          <div id="<?= $objmenu->url ?>" class="collapse sidebar-submenu">
              <a href="<?= base_url($submenu->url) ?>" class="list-group-item list-group-item-action bg-light text-dark">
                  <span class="menu-collapsed"><?= $submenu->menu ?></span>
              </a>
          </div>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </div>


    </div>

    <div id="page-content-wrapper">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <button class="btn btn-link" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url("admin/projetos") ?>">Trocar de Projeto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url("accounts/logout") ?>">Sair</a>
            </li>
          </ul>
        </div>
      </nav>


