<?php 
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Pagina não foi encontrada | Matilab </title>
    
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
    <style type="text/css">
      html,
      body {
        height: 100%;
      }

      body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }
      .windows {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: auto;
      }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light py-3">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url("assets/images/apple-touch-icon.png") ?>" width="30" height="30" class="d-inline-block align-top mr-2" alt="">
        <?= nome_projeto() ?>
      </a>
    </div>
  </nav>

  <main id="notfound-state" class="empty-state empty-state-fullpage bg-black windows">
    <div class="card">
      <div class="card-header bg-light text-left">
        <i class="fa fa-fw fa-circle text-danger"></i> 
        <i class="fa fa-fw fa-circle text-warning"></i> 
        <i class="fa fa-fw fa-circle text-info"></i>
      </div>
      <div class="card-body text-center">
        <h1 class="display-1 font-weight-bold">
          <span>4</span> <i class="far fa-frown text-danger"></i> <span>4</span>
        </h1>
        <h2> <?php echo $heading; ?> </h2>
        <p> <?php echo $message; ?> </p>
        <a href="<?= base_url(); ?>" class="btn btn-lg btn-light"><i class="fa fa-angle-right"></i> Pagina Principal</a>
      </div>
    </div>
  </main>

  <?php if(isset($arrJS)) foreach ($arrJS as $js) { ?>
    <script src="<?= $js ?>" ></script>
  <?php } ?>

  </body>
</html>