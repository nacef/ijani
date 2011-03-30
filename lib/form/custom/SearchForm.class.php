<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LocationFilterFormclass
 *
 * @author nacef
 */
class SearchForm extends sfForm {
  public function configure() {
    $this->widgetSchema['state'] = new sfWidgetFormDoctrineChoice(array(
      'model' => 'State',
      'add_empty' => true,
      'order_by' => array('name', 'asc')
    ),array(
      'class' => 'states'
    ));

    $this->widgetSchema['town'] = new sfWidgetFormChoice(array(
      'choices' => array()
    ), array(
      'class' => 'towns'
    ));

    $this->widgetSchema['locality'] = new sfWidgetFormChoice(array(
      'choices' => array()
    ), array(
      'class' => 'localities'
    ));

    $this->widgetSchema['domain'] = new sfWidgetFormDoctrineChoice(array(
      'model' => 'Domain',
      'add_empty' => true,
      'order_by' => array('name', 'asc')
    ));

    $this->widgetSchema['domain']->setLabel("Je cherche un : ");
  }
}
?>
