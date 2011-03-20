<?php

/**
 * Locality form base class.
 *
 * @method Locality getObject() Returns the current form's model object
 *
 * @package    ijani
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLocalityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'name'    => new sfWidgetFormInputText(),
      'town_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Town'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'town_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Town'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('locality[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Locality';
  }

}
