<?php use_helper('ijani', 'GMap'); ?>
<p><?php echo $presta->getName(); ?></p>
<p><?php echo rating_status($presta->getRating()); ?></p>
<br/>
<p><?php echo $presta->getPresentation(); ?></p>
<p>Domaines :
  <?php foreach($presta->Domaines as $domain): ?>
  <?php echo link_to($domain->getName(), '@domaine?id='.$domain->getId().'&domaine='.$domain->getName()); ?>
  <?php endforeach; ?>
</p>
<?php include_map($gmap, array('width' => '320px', 'height' => '240px')); ?>
<?php include_map_javascript($gmap); ?>
<p>Adresse : <?php echo $presta->getAddress(); ?></p>
<p><?php echo $presta->getReperes(); ?>
<p>Tel : <?php echo $presta->getTel() ?></p>
<p>Mobile : <?php echo $presta->getMobile() ?></p>
<?php include_component('comment', 'formComment', array('object' => $presta)) ?>
<?php include_component('comment', 'list', array('object' => $presta, 'i' => 0)) ?>
