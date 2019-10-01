    <nav class="navbar navbar-light fixed-top bg-light shadow pb-2">
      <a class="navbar-brand" href="<?= base_url("admin/") ?>">
        <img src="<?= base_url("assets/images/apple-touch-icon.png") ?>" width="30" height="30" class="d-inline-block align-top" alt="">
        <?= nome_projeto() ?>
      </a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url("logout/") ?>">Sair</a>
        </li>
      </ul>
    </nav>