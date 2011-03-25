<ul class="item-list">
  <?php foreach($prestas as $presta): ?>
  <li><?php include_partial("resume", array('presta' => $presta)) ?></li>
  <?php endforeach; ?>
</ul>