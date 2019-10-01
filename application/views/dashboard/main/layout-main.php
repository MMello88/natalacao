			  <?php if(isset($main_submenu)) : ?>
			  <!-- .page-title-bar -->
              <header class="page-title-bar">
                <!-- page title stuff goes here -->
                <h1 class="page-title"> 
                <?= $main_submenu->submenu->submenu ?>
                </h1>
              </header><!-- /.page-title-bar -->
			  <?php endif; ?>
			  
              <?php if(isset($main_submenu->submenu->output)) : ?>
                <div style='padding: 20px'>
                  <?= $main_submenu->submenu->output->output ?>
                </div>
              <?php endif; ?>		  
			  
              <?php if(isset($output)) : ?>
              <div style="padding: 20px">
                <?php echo $output; ?>
              </div>
              <?php endif; ?>