<?php

/**
 * Locality filter form base class.
 *
 * @package    ijani
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLocalityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(),
      'town_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Town'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'town_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Town'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('locality_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Locality';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'name'    => 'Text',
      'town_id' => 'ForeignKey',
    );
  }
}
