<?php foreach($prestas as $presta): ?>
  <p><?php echo $presta->getName(); ?></p>
  <p><?php echo $presta->getPresentation() ?></p>
  <p><?php echo $presta->getAddress() ?></p>
  <p><?php echo $presta->getLocality() ?></p>
  <p>Tel : <?php echo $presta->getTel() ?></p>
  <p>Mobile : <?php echo $presta->getMobile() ?></p>
<?php endforeach; ?>