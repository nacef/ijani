<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RatingWidgetclass
 *
 * @author nacef
 */
class RatingWidget extends sfWidgetForm {

  public function configure($options = array(), $attributes = array()) {
  }

  public function render($name, $value = null, $attributes = array(), $errors = array()) {
    $html = '<div id="{widget.name}RatingContainer">
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
        $("#{widget.name}RatingContainer").stars({inputType: "select"});
      });
      </script>';

    $template_vars = array(
      '{widget.name}' => $name
    );

    return strtr($html, $template_vars);
  }

  public function getJavaScripts() {
    return array(
      '/js/jquery-ui-1.8.11.custom.min.js',
      '/js/jquery.ui.stars/jquery.ui.stars.js',
    );
  }

  public function getStylesheets() {
    return array(
      '/js/jquery.ui.stars/jquery.ui.stars.css' => 'all'
    );
  }
}
?>
