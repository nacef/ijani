<p>Nom : <?php echo $presta->getName(); ?></p>
<p>Adresse : <?php echo $presta->getAddress(); ?></p>
<p><?php echo $presta->getPresentation(); ?></p>
<p>Tel : <?php echo $presta->getTel() ?></p>
<p>Mobile : <?php echo $presta->getMobile() ?></p>
<?php include_component('comment', 'formComment', array('object' => $presta)) ?>
<?php include_component('comment', 'list', array('object' => $presta, 'i' => 0)) ?>
