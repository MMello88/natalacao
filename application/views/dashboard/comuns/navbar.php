    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow pb-2">
      <a class="navbar-brand" href="<?= base_url("admin/") ?>">
        <img src="<?= base_url("assets/images/apple-touch-icon.png") ?>" width="30" height="30" class="d-inline-block align-top" alt="">
        <?= nome_projeto() ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
                    aria-expanded="false" aria-label="Toggle navigation">
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
    </nav>