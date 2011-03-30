<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GmapForm
 *
 * @author nacef
 */
class GmapForm extends sfForm {

  public function configure() {
    $this->setWidgets(array(
        'map' => new CoordsPickerWidget()
    ));
  }
}
?>
