<?php

/**
 * Town filter form base class.
 *
 * @package    ijani
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTownFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'     => new sfWidgetFormFilterInput(),
      'state_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'     => new sfValidatorPass(array('required' => false)),
      'state_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('State'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('town_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Town';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'name'     => 'Text',
      'state_id' => 'ForeignKey',
    );
  }
}
