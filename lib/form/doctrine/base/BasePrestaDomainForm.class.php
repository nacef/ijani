<?php

/**
 * PrestaDomain form base class.
 *
 * @method PrestaDomain getObject() Returns the current form's model object
 *
 * @package    ijani
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePrestaDomainForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'presta_id' => new sfWidgetFormInputHidden(),
      'domain_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'presta_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('presta_id')), 'empty_value' => $this->getObject()->get('presta_id'), 'required' => false)),
      'domain_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('domain_id')), 'empty_value' => $this->getObject()->get('domain_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('presta_domain[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrestaDomain';
  }

}
