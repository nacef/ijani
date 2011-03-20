<?php

/**
 * BaseState
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Towns
 * 
 * @method string              getName()  Returns the current record's "name" value
 * @method Doctrine_Collection getTowns() Returns the current record's "Towns" collection
 * @method State               setName()  Sets the current record's "name" value
 * @method State               setTowns() Sets the current record's "Towns" collection
 * 
 * @package    ijani
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseState extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('state');
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Town as Towns', array(
             'local' => 'id',
             'foreign' => 'state_id'));
    }
}