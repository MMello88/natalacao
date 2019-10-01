              <?php if($page_user_view !== "settings") : ?>
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="<?= base_url("admin/accounts/settings") ?>"><i class="breadcrumb-icon oi oi-arrow-left mr-2"></i>Settings</a>
                    </li>
                  </ol>
                </nav>
              </header><!-- /.page-title-bar -->
              <?php endif; ?>
              <!-- .page-section -->
              <div class="page-section">
                <!-- grid row -->
                <div class="row">
                  <?php include_once("allMenuUser.php"); ?>
                  <?php include_once("$page_user_view.php"); ?>
                </div><!-- /grid row -->
              </div><!-- /.page-section -->
            
