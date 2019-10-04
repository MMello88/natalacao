	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	  	<img src="<?= base_url("assets/images/apple-touch-icon.png") ?>" width="30" height="30" class="d-inline-block align-top" alt="">
	  	<?= nome_projeto() ?>
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Doação</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Sobre</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<header class="jumbotron jumbotron-fluid">

		<div class="container text-center text-light mt-5">
			<h1 class="display-4">Contribui com nossa paróquia</h1>
	    	<p class="lead">Sua doação pode mudar vidas. Doe e acompanhe nossos trabalhos estamos trazendo esperanças a nossa juventude.</p>
	    	<a href="<?= base_url("accounts/login") ?>" class="btn btn-lg btn-danger">Fazer um doação</a>
		</div>
	</header>

    

