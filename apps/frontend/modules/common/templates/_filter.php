<?php use_javascript('/djs/effects.js'); ?>
<form method="POST" action="<?php echo url_for('presta/search') ?>">
  <?php echo $searchForm->renderUsing('list', array()) ?>
  <input type="submit" value="Find" />
</form>