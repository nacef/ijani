<option value=""></option>
<?php if (isset ($towns)): ?>
<?php foreach($towns as $town): ?>
<option value="<?php echo $town->getId() ?>"><?php echo $town->getName() ?></option>
<?php endforeach; ?>
<?php endif; ?>