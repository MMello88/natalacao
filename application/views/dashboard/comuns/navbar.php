      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <a href="<?= base_url() ?>"><img src="<?= base_url_template_images("brand-inverse.png") ?>" alt="" style="height: 32px;width: auto;"></a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-pulse"></span></a>
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                    <h6 class="dropdown-header stop-propagation">
                      <span>Activities <span class="badge">(2)</span></span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?= base_url_template_images("avatars/uifaces15.jpg") ?>" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Tornou-se membro do MatiLab </p><span class="date"><?= date("d/m/Y",strtotime($_usuario->dt_cadastro)) ?></span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                    <h6 class="dropdown-header stop-propagation">
                      <span>Messages</span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?= base_url_template_images("avatars/team1.jpg") ?>" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Seja Bem-Vindo </p>
                          <p class="text text-truncate"> Felicitações <?= $_usuario->nome ?> </p><span class="date"><?= date("d/m/Y",strtotime($_usuario->dt_cadastro)) ?></span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
              </ul><!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown">
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img id="imgAvatarNavBar" src="<?= base_url_template_images("avatars/$_usuario->imagem_perfil") ?>" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?= $_usuario->nome ?></span> <span class="account-description"><?= $_usuario->super_usuario ?></span></span></button>
                <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?= $_usuario->nome?> </h6>
                  <a class="dropdown-item" href="<?= base_url("admin/accounts/settings") ?>"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                  <a class="dropdown-item" href="<?= base_url("projects/select") ?>"><span class="dropdown-icon oi oi-folder"></span> Trocar Projeto</a>
                  <a class="dropdown-item" href="<?= base_url("accounts/logout") ?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header><!-- /.app-header -->