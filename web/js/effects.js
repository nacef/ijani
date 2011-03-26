$(document).ready(function(){

  $(".states").change(function(){
    $(".towns").load("location/towns/state_id/" + $(this).val());
  });

  $(".towns").change(function(){
    $(".localities").load("location/localities/town_id/" + $(this).val());
  });

  $("#filter_button").click(function(){
    $.post("presta/search", $('#filter_form').serialize(), function(data){
      $('#content').html(data);
    });
  });
});
