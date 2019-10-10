  <!-- Footer -->
  <footer class="footer bg-light" id="contato">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <?php foreach($pages as $page): ?>
            <li class="list-inline-item">
              <a href="<?= base_url($page->url) ?>"><?= $page->pagina ?></a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <?php endforeach; ?>
            <li class="list-inline-item">
              <a href="<?= base_url("accounts/login") ?>">Login</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; <a href="http://www.matilab.com.br" target="_blank">matilab.com.br</a> 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-3 h-100 text-center text-lg-left my-auto">
          <?php if (is_set($foot, 'endereco') !== ''): ?>
          <p class="text-muted font-weight-light"><b>End.:</b> <?= is_set($foot, 'endereco') ?></p>
          <?php endif; ?>
          <?php if (is_set($foot, 'telefone') !== ''): ?>
          <p class="text-muted font-weight-light"><b>Telefone:</b> <?= is_set($foot, 'telefone') ?></p>
          <?php endif; ?>
          <?php if (is_set($foot, 'horario') !== ''): ?>
          <p class="text-muted font-weight-light"><b>Atendimento:</b> <?= is_set($foot, 'horario') ?></p>
          <?php endif; ?>
        </div>
        <div class="col-lg-3 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <?php if (is_set($foot, 'facebook') !== ''): ?>
            <li class="list-inline-item mr-3">
              <a href="<?= is_set($foot, 'facebook') ?>">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <?php endif; ?>
            <?php if (is_set($foot, 'twitter') !== ''): ?>
            <li class="list-inline-item mr-3">
              <a href="<?= is_set($foot, 'twitter') ?>">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <?php endif; ?>
            <?php if (is_set($foot, 'instagram') !== ''): ?>
            <li class="list-inline-item">
              <a href="<?= is_set($foot, 'instagram') ?>">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </footer>

    <?php if(isset($arrJS)) foreach ($arrJS as $js) { ?>
      <script src="<?= $js ?>" ></script>
    <?php } ?>

  </body>
</html>