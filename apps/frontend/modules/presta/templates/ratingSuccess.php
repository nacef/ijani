<?php use_helper('ijani'); ?>
<?php include_javascripts_for_form($ratingForm); ?>
<?php include_stylesheets_for_form($ratingForm); ?>
<form action="<?php echo url_for('presta/rating'); ?>" method="post">
<?php echo $ratingForm; ?>
<input type="submit" value="Submit" />
</form>

<?php echo rating_status(3); ?>