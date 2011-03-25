<?php

/**
 * PrestaRating filter form base class.
 *
 * @package    ijani
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePrestaRatingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rate'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'rate'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('presta_rating_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrestaRating';
  }

  public function getFields()
  {
    return array(
      'presta_id' => 'Number',
      'user_id'   => 'Number',
      'rate'      => 'Number',
    );
  }
}
