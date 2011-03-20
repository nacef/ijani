<?php

/**
 * User filter form base class.
 *
 * @package    ijani
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'first_name' => new sfWidgetFormFilterInput(),
      'last_name'  => new sfWidgetFormFilterInput(),
      'address'    => new sfWidgetFormFilterInput(),
      'latitude'   => new sfWidgetFormFilterInput(),
      'longitude'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'first_name' => new sfValidatorPass(array('required' => false)),
      'last_name'  => new sfValidatorPass(array('required' => false)),
      'address'    => new sfValidatorPass(array('required' => false)),
      'latitude'   => new sfValidatorPass(array('required' => false)),
      'longitude'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'first_name' => 'Text',
      'last_name'  => 'Text',
      'address'    => 'Text',
      'latitude'   => 'Text',
      'longitude'  => 'Text',
    );
  }
}
