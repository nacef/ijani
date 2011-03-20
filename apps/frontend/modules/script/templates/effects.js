$(document).ready(function(){
  $(".states").change(function(){
    $(".towns").load("<?php echo url_for('location/towns') ?>/state_id/" + $(this).val());
  });

  $(".towns").change(function(){
    $(".localities").load("/web/location/localities/town_id/" + $(this).val());
  });

});