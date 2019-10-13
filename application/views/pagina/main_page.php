  <header class="masthead text-white text-center" id="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5"><?= $home['titulo'] ?></h1>
          <p class="lead"><?= $home['descricao'] ?></p>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <div class="form-row">
            <div class="col-12 col-md-12 mb-2 mb-md-0">
              <a href="<?= base_url("doacao/doar") ?>" target="_blank" class="btn btn-lg btn-danger">Fazer um doação</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center" id="doacao">
    <div class="container">
      <h2 class="mb-5"><?= $doacao['titulo'] ?></h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="<?= $doacao['doacao_icon'] ?> m-auto text-primary"></i>
            </div>
            <h3><?= $doacao['doacao_titulo'] ?></h3>
            <p class="lead mb-0"><?= $doacao['doacao_descricao'] ?></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="<?= $doacao['doacao_icon1'] ?> m-auto text-primary"></i>
            </div>
            <h3><?= $doacao['doacao_titulo1'] ?></h3>
            <p class="lead mb-0"><?= $doacao['doacao_descricao1'] ?></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="<?= $doacao['doacao_icon2'] ?> m-auto text-primary"></i>
            </div>
            <h3><?= $doacao['doacao_titulo2'] ?></h3>
            <p class="lead mb-0"><?= $doacao['doacao_descricao2'] ?></p>
          </div>
        </div>
        
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto mt-5">
          <div class="form-row">
            <div class="col-12 col-md-12 mb-2 mb-md-0">
              <a href="<?= base_url("doacao/doar") ?>" target="_blank" class="btn btn-lg btn-danger">Fazer um doação</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  <section class="testimonials text-center bg-white" id="sobre">
    <div class="container">
      <h2 class="mb-5"><?= $sobre['titulo'] ?></h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url("assets/uploads/files/".$sobre['item_imagem']) ?>" alt="">
            <h5><?= $sobre['item_titulo'] ?></h5>
            <p class="font-weight-light mb-0"><?= $sobre['item_descricao'] ?></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url("assets/uploads/files/".$sobre['item_imagem1']) ?>" alt="">
            <h5><?= $sobre['item_titulo1'] ?></h5>
            <p class="font-weight-light mb-0"><?= $sobre['item_descricao1'] ?></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url("assets/uploads/files/".$sobre['item_imagem2']) ?>" alt="">
            <h5><?= $sobre['item_titulo2'] ?></h5>
            <p class="font-weight-light mb-0"><?= $sobre['item_descricao2'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>