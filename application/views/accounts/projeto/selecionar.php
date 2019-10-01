      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar" style="padding-left: 10px;">
                <h1 class="page-title"> Sistemas contratados. </h1>
                <p class="text-muted"> Escolha o Sistema que vai trabalhar. </p>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- Default Steps -->
				  <?php	foreach($contratos as $contrato) : ?>
				  <div class="masonry-item col-lg-6" >
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body text-center">
                        <!-- .user-avatar -->
                        <a href="user-profile.html" class="user-avatar user-avatar-xxl my-3"><img src="<?= base_url("assets/uploads/files/{$contrato->projeto->imagem}") ?>" alt=""></a> <!-- /.user-avatar -->
                        <h3 class="card-title text-truncate">
                          <a href="#"><?= $contrato->projeto->projeto ?></a>
                        </h3>
                        <h6 class="card-subtitle text-muted mb-3"> <?= $contrato->projeto->descricao ?> </h6>
                        <p>
                          <a href="<?= base_url("projects/selected/$contrato->id_projeto") ?>" class="btn btn-primary circle">Selecionar <i class="oi oi-arrow-right ml-2"></i></a>
                        </p>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div>
				  <?php endforeach; ?>
                </div><!-- /.section-block -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->