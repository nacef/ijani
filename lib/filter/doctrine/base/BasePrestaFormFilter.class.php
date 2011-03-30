<?php

/**
 * Presta filter form base class.
 *
 * @package    ijani
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePrestaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(),
      'presentation'  => new sfWidgetFormFilterInput(),
      'address'       => new sfWidgetFormFilterInput(),
      'latitude'      => new sfWidgetFormFilterInput(),
      'longitude'     => new sfWidgetFormFilterInput(),
      'tel'           => new sfWidgetFormFilterInput(),
      'mobile'        => new sfWidgetFormFilterInput(),
      'fax'           => new sfWidgetFormFilterInput(),
      'locality_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Locality'), 'add_empty' => true)),
      'rating'        => new sfWidgetFormFilterInput(),
      'reperes'       => new sfWidgetFormFilterInput(),
      'domaines_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Domain')),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'presentation'  => new sfValidatorPass(array('required' => false)),
      'address'       => new sfValidatorPass(array('required' => false)),
      'latitude'      => new sfValidatorPass(array('required' => false)),
      'longitude'     => new sfValidatorPass(array('required' => false)),
      'tel'           => new sfValidatorPass(array('required' => false)),
      'mobile'        => new sfValidatorPass(array('required' => false)),
      'fax'           => new sfValidatorPass(array('required' => false)),
      'locality_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Locality'), 'column' => 'id')),
      'rating'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'reperes'       => new sfValidatorPass(array('required' => false)),
      'domaines_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Domain', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('presta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addDomainesListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('PrestaDomain.domain_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Presta';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'presentation'  => 'Text',
      'address'       => 'Text',
      'latitude'      => 'Text',
      'longitude'     => 'Text',
      'tel'           => 'Text',
      'mobile'        => 'Text',
      'fax'           => 'Text',
      'locality_id'   => 'ForeignKey',
      'rating'        => 'Number',
      'reperes'       => 'Text',
      'domaines_list' => 'ManyKey',
    );
  }
}
