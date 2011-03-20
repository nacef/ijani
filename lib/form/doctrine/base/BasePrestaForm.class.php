<?php

/**
 * Presta form base class.
 *
 * @method Presta getObject() Returns the current form's model object
 *
 * @package    ijani
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePrestaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'presentation'  => new sfWidgetFormInputText(),
      'address'       => new sfWidgetFormInputText(),
      'latitude'      => new sfWidgetFormInputText(),
      'longitude'     => new sfWidgetFormInputText(),
      'tel'           => new sfWidgetFormInputText(),
      'mobile'        => new sfWidgetFormInputText(),
      'fax'           => new sfWidgetFormInputText(),
      'locality_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Locality'), 'add_empty' => true)),
      'domaines_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Domain')),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'presentation'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'latitude'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'longitude'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'tel'           => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'mobile'        => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fax'           => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'locality_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Locality'), 'required' => false)),
      'domaines_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Domain', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('presta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Presta';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['domaines_list']))
    {
      $this->setDefault('domaines_list', $this->object->Domaines->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveDomainesList($con);

    parent::doSave($con);
  }

  public function saveDomainesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['domaines_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Domaines->getPrimaryKeys();
    $values = $this->getValue('domaines_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Domaines', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Domaines', array_values($link));
    }
  }

}
