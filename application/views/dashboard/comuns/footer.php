
    <?php if(isset($arrJS)) foreach ($arrJS as $js) { ?>
        <script src="<?= $js ?>" ></script>
    <?php } ?>
    <?php if(isset($js_files)): ?>
    <?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	<?php endif; ?>

  </body>
</html>