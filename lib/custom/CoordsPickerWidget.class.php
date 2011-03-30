<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoordsPickerWidget
 *
 * @author nacef
 */
class CoordsPickerWidget extends sfWidgetForm {

  protected function configure($options = array(), $attributes = array()) {
    $this->setOption('default', array(
        'latitude' => '36.82',
        'longitude' => '10.16',
    ));

    $this->addOption('map.latitude', '36.82');
    $this->addOption('map.longitude', '10.16');
    $this->addOption('map.width', '500px');
    $this->addOption('map.height', '300px');
    $this->addOption('map.id', md5(uniqid()));

    $this->addOption('template.html', '
      <div id="map_{map.id}" style="width:640px;height:480px"></div>');

    $this->addOption('template.js', '
      <script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=false">
</script>
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
</script>');


  }

  public function render($name, $value = null, $attributes = array(), $errors = array()) {
    $template_vars = array(
        '{map.latitude}' => $this->getOption('map.latitude'),
        '{map.longitude}' => $this->getOption('map.longitude'),
        '{map.id}' => $this->getOption('map.id'),
    );

    return strtr($this->getOption('template.html').$this->getOption('template.js'), $template_vars);
  }
}
?>
