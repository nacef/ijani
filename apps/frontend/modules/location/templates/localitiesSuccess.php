<option value=""></option>
<?php if (isset ($localities)): ?>
<?php foreach($localities as $locality): ?>
<option value="<?php echo $locality->getId() ?>"><?php echo $locality->getName() ?></option>
<?php endforeach; ?>
<?php endif; ?>