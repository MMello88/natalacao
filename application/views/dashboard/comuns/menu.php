<!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="<?= base_url_template_images("avatars/$_usuario->imagem_perfil") ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?= $_usuario->nome ?></span> <span class="account-description"><?= $_usuario->super_usuario ?></span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html">
                  <span class="dropdown-icon oi oi-person"></span> Profile
                </a>
                <a class="dropdown-item" href="auth-signin-v1.html">
                  <span class="dropdown-icon oi oi-account-logout"></span> Logout
                </a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->

          <!-- .aside-menu -->
          <div class="aside-menu overflow-auto">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <?php if(isset($main_menu)) : ?>
                  <li class="menu-header"><?= $main_menu->projeto->projeto; ?></li>
                  <li class="menu-item">
                    <a href="<?= base_url("admin/overview") ?>" class="menu-link"><span class="menu-icon oi oi-home"></span> <span class="menu-text">Dashboard</span></a>
                  </li>
                  <!-- .menu-item -->
                  <?php foreach($main_menu->modulos as $modulo) : ?>
                    <li class="menu-header"><?= $modulo->modulo->modulo; ?></li>
                      <?php foreach($modulo->permissoes as $permissao) : ?>
                          <?php $menu = $permissao->menu; ?>
                          <?php if(!empty($main_submenu)) 
                            if ($menu->id_menu == $main_submenu->id_menu) 
                              $menu->active = $main_submenu->active; ?>
                        <li class="menu-item <?= $menu->active ?>">
                          <a href="<?= base_url($menu->url) ?>" class="menu-link"><span class="menu-icon <?= $menu->icone ?>"></span> <span class="menu-text"><?= $menu->menu ?></span></a>
                        </li>
                        <?php endforeach; ?>
                  <?php endforeach; ?>
                  <li class="menu-header">Logout</li>
                  <li class="menu-item">
                    <a href="<?= base_url("accounts/logout") ?>" class="menu-link"><span class="menu-icon oi oi-account-logout"></span> <span class="menu-text">Sair</span></a>
                  </li>
                <?php endif; ?>
                <!-- .menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->


          <!-- Skin changer -->
          <footer class="aside-footer border-top p-3">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin">Night mode <i class="oi oi-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
          
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-cover -->
            <header class="page-cover d-none">
              <div class="text-center">
                <a href="user-profile.html" class="user-avatar user-avatar-xl"><img id="imgAvatarHeader" src="<?= base_url_template_images("avatars/$_usuario->imagem_perfil") ?>" alt=""></a>
                <h2 class="h4 mt-2 mb-0"> <?= $_usuario->nome ?> </h2>
                <div class="my-1">
                  <i class="fa fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                </div>
                <p class="text-muted"> Usuário <?= $_usuario->super_usuario ?> </p>
                <p> <?= $_usuario->biografia ?> </p>
              </div><!-- .cover-controls -->
            </header><!-- /.page-cover -->
            <!-- .page-navs -->
            <?php if(!empty($main_submenu)) : ?>
            <nav class="page-navs">
              <!-- .nav-scroller -->
              <div class="nav-scroller">
                <!-- .nav -->
                <div class="nav nav-center nav-tabs">
                  <?php foreach($main_submenu->submenus as $submenu) : ?>
                  <a class="nav-link <?= $submenu->active ?>" href="<?= base_url($submenu->url) ?>"><?= $submenu->submenu ?></a> 
                  <?php endforeach; ?>
                </div><!-- /.nav -->
              </div><!-- /.nav-scroller -->
            </nav><!-- /.page-navs -->
            <?php endif; ?>
            <!-- .page-inner -->
            <div class="page-inner">