<?php use_javascript('/djs/effects.js'); ?>
<form id="filter_form" method="POST" action="<?php echo url_for('presta/search') ?>">
  <?php echo $searchForm->renderUsing('list', array()) ?>
  <input id="filter" type="button" value="Find" />
</form>