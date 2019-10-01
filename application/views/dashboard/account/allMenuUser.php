			      <!-- grid column -->
                  <div class="col-lg-4">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Your Details </h6><!-- .nav -->
                      <nav class="nav nav-tabs flex-column border-0">
                        <a href="<?= base_url("admin/accounts/settings") ?>" class="nav-link <?= $css_view_user == "settings" ? "active" : "" ?>">Profile</a>
                        <a href="<?= base_url("admin/accounts/user-account") ?>" class="nav-link <?= $css_view_user == "user-account" ? "active" : "" ?>">Account</a>
                        <a href="<?= base_url("admin/accounts/projetos") ?>" class="nav-link <?= $css_view_user == "projetos" ? "active" : "" ?>">Projetos</a>
                        <!--<a href="<?= base_url("accounts/settings/user-notifications") ?>" class="nav-link <?= $css_view_user == "user-notifications" ? "active" : "" ?>">Notifications</a> -->
                      </nav><!-- /.nav -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->