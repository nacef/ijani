$(document).ready(function(){

  $(".states").change(function(){
    $(".towns").load("<?php echo url_for('location/towns') ?>/state_id/" + $(this).val());
  });

  $(".towns").change(function(){
    $(".localities").load("<?php echo url_for('location/localities') ?>/town_id/" + $(this).val());
  });

  $("#filter").click(function(){
    $.post("<?php echo url_for('presta/search') ?>", $('#filter_form').serialize(), function(data){
      $('#results').html(data);
    });
  });

});