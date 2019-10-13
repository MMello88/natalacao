<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Venha contruir seu próprio website | Matilab </title>
    <meta name="author" content="<?= is_set($head, 'author') ?>">
    <meta name="description" content="<?= is_set($head, 'description') ?>">
    <meta name="keywords" content="<?= is_set($head, 'keywords') ?>">
    <meta property="og:title" content="<?= is_set($head, 'title') ?>">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:description" content="<?= is_set($head, 'description') ?>">
    <meta property="og:url" content="<?= is_set($head, 'url') ?>">
    <meta property="og:site_name" content="<?= is_set($head, 'site_name') ?>">
    <meta property="og:image" content="<?= base_url('assets/images/' . is_set($head, 'image')) ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600"> 
    <meta property="og:type" content="<?= is_set($head, 'type') ?>">
    <script>
      var base_url = "<?= base_url(); ?>";
      var slug = "<?= isset($slug) ? $slug : '' ?>";
    </script>

    <link rel="canonical" href="http://matilab.com.br">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url("assets/images/apple-touch-icon.png") ?>">
    <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.ico") ?>">
    <link href="<?= base_url_webapp("css/components/fontawesome-free/all.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url_webapp("css/components/simple-line-icons/css/simple-line-icons.css") ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url_webapp("css/master.css") ?>">
    <?php if(isset($arrCss)) foreach($arrCss as $css): ?>
    <link rel="stylesheet" href="<?= $css ?>">
    <?php endforeach; ?>

  </head>
  <body class="bg-light">

	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light py-3">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url("assets/images/apple-touch-icon.png") ?>" width="30" height="30" class="d-inline-block align-top mr-2" alt="">
        <?= nome_projeto() ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <?php foreach($pages as $page): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url($page->url) ?>"><?= $page->pagina ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
	</nav>