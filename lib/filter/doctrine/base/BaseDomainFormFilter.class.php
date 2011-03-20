<?php

/**
 * Domain filter form base class.
 *
 * @package    ijani
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDomainFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(),
      'prestas_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Presta')),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'prestas_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Presta', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('domain_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addPrestasListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.PrestaDomain PrestaDomain')
      ->andWhereIn('PrestaDomain.presta_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Domain';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'prestas_list' => 'ManyKey',
    );
  }
}
