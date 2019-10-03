<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
      <?php if(isset($projeto)) : ?>
        <h5><?= $projeto->projeto ?></h5>
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

  
