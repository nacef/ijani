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

function map($options = array(), $attributes = array()) {
  $widget = '
  <div id="map_{map.id}" style="width:{map.width}px;height:{map.height}px"></div>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var latlng = new google.maps.LatLng({map.latitude}, {map.longitude});
      var myOptions = {
        zoom: 8,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map_{map.id}"),
        myOptions);
      });
  </script>';

  $widget_vars = array(
      "{map.width}" => $attributes['width'],
      "{map.height}" => $attributes['height'],
      "{map.latitude}" => $options['latitude'],
      "{map.longitude}" => $options['longitude'],
      "{map.id}" => md5(uniqid())
  );

  return strtr($widget, $widget_vars);
}