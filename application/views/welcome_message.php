<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Em breve | Matilab </title>
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
    <link rel="stylesheet" href="<?= base_url_template_vendor("open-iconic/css/open-iconic-bootstrap.min.css") ?>">
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
    <!-- .empty-state -->
    <main id="comingsoon" class="empty-state empty-state-fullpage bg-primary text-white" style="background-image: url(<?= base_url_template_images("illustration/img-1.png") ?>);">
      <!-- .empty-state-container -->
      <div class="empty-state-container">
        <h1 class="state-header"> EM BREVE MATHEUS</h1>
        <div id="clock" class="countdown display-3">
          <div class="countdown-item"> 00 <small>Days</small>
          </div>
          <div class="countdown-item"> 00 <small>Hr</small>
          </div>
          <div class="countdown-item"> 00 <small>Min</small>
          </div>
          <div class="countdown-item"> 00 <small>Sec</small>
          </div>
        </div>
        <p class="state-description lead"> We're a Creative Agency based in Europe. Be the first to know when we live. </p>
        <form class="w-75 mx-auto">
          <div class="form-group">
            <div class="input-group bg-white border-white input-group-lg circle">
              <input type="email" class="form-control text-black" placeholder="Your email">
              <div class="input-group-append">
                <button type="submit" class="btn btn-warning circle"><span class="d-none d-sm-inline">Subcribe</span> <span class="d-inline d-sm-none" aria-label="Subcribe"><i class="fa fa-arrow-circle-right"></i></span></button>
              </div>
            </div>
          </div>
        </form>
        <div class="state-action"> 
          <a href="<?= base_url("accounts/accounts"); ?>" class="btn btn-reset"><i class="oi oi-account-login"></i></a> 
          <?php if(isset($_usuario)) : ?>
          <a href="<?= base_url("admin/overview"); ?>" class="btn btn-reset"><i class="oi oi-dashboard"></i></a> 
          <?php else : ?>
          <a href="<?= base_url("accounts/logout"); ?>" class="btn btn-reset"><i class="oi oi-account-logout"></i></a> 
          <?php endif; ?>
          <a href="#" class="btn btn-reset"><i class="fab fa-fw fa-facebook"></i></a> 
          <a href="#" class="btn btn-reset"><i class="fab fa-fw fa-twitter"></i></a> 
          <a href="#" class="btn btn-reset"><i class="fab fa-fw fa-instagram"></i></a> 
          <a href="#" class="btn btn-reset"><i class="fab fa-fw fa-linkedin"></i></a>
        </div>
      </div><!-- /.empty-state-container -->
    </main><!-- /.empty-state -->
    <!-- BEGIN BASE JS -->
    <script src="<?= base_url_template_vendor("jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url_template_vendor("bootstrap/js/popper.min.js") ?>"></script>
    <script src="<?= base_url_template_vendor("bootstrap/js/bootstrap.min.js") ?>"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?= base_url_template_vendor("particles.js/particles.min.js") ?>"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url_template_javascript("theme.min.js") ?>"></script> <!-- END THEME JS -->
    <!-- BEGIN JS -->
    <script>
      /**
       * Keep in mind that your scripts may not always be executed after the theme is completely ready,
       * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
       */
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('comingsoon', '<?= base_url_template_javascript("pages/particles-comingsoon.json") ?>');
        // Set the date we're counting down to
        var countDownDate = new Date('Dec 30, 2019 15:37:25').getTime();
        var countDownFormater = function(i)
        {
          return i < 10 ? '0' + i : i;
        }
        // Update the count down every 1 second
        var countDown = setInterval(function()
        {
          // Get todays date and time
          var now = new Date().getTime();
          // Find the distance between now an the count down date
          var distance = countDownDate - now;
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          // Display the result in the element with id='clock'
          document.querySelector('#clock').innerHTML = '' + '<div class="countdown-item">' + countDownFormater(days) + ' <small>Days<\/small><\/div>' + '<div class="countdown-item">' + countDownFormater(hours) + ' <small>Hr<\/small><\/div>' + '<div class="countdown-item">' + countDownFormater(minutes) + ' <small>Min<\/small><\/div>' + '<div class="countdown-item">' + countDownFormater(seconds) + ' <small>Sec<\/small><\/div>';
          // If the count down is finished, write some text
          if (distance < 0)
          {
            clearInterval(countDown);
            document.querySelector('#clock').innerHTML = 'We\'ll Live Soon';
          }
        }, 1000);
      })
    </script> <!-- END JS -->
  </body>
</html>