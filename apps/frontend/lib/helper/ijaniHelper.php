<?php

function rating_status($rating) {
  $widget = '<div id="{widget.id}">
      <select name="{widget.name}_rating">
      <option value="1">Very poor</option>
      <option value="2">Not that bad</option>
      <option value="3">Average</option>
      <option value="4" selected="selected">Good</option>
      <option value="5">Perfect</option>
      </select>
      </div>
      <script type="text/javascript">
      $(document).ready(function(){
        $("#{widget.id}").stars({inputType: "select", disabled: true});
      });
      </script>';

  $template_vars = array(
    '{widget.id}' => md5(uniqid())
  );

  return strtr($widget, $template_vars);
}