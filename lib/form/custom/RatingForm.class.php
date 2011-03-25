<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RatingFormclass
 *
 * @author nacef
 */
class RatingForm extends sfForm {

  public function configure() {
    $this->setWidgets(array(
      'rating' => new RatingWidget()
    ));
  }
}
?>
