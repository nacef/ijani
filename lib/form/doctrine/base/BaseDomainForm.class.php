<?php

/**
 * Domain form base class.
 *
 * @method Domain getObject() Returns the current form's model object
 *
 * @package    ijani
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDomainForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'prestas_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Presta')),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'prestas_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Presta', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('domain[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Domain';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['prestas_list']))
    {
      $this->setDefault('prestas_list', $this->object->Prestas->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->savePrestasList($con);

    parent::doSave($con);
  }

  public function savePrestasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['prestas_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Prestas->getPrimaryKeys();
    $values = $this->getValue('prestas_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Prestas', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Prestas', array_values($link));
    }
  }

}
