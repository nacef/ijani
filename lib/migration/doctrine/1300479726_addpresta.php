<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addpresta extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('presta', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => 50,
             ),
             'presentation' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'address' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'latitude' => 
             array(
              'type' => 'string',
              'length' => 20,
             ),
             'longitude' => 
             array(
              'type' => 'string',
              'length' => 20,
             ),
             'tel' => 
             array(
              'type' => 'string',
              'length' => 20,
             ),
             'mobile' => 
             array(
              'type' => 'string',
              'length' => 20,
             ),
             'fax' => 
             array(
              'type' => 'string',
              'length' => 20,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('presta');
    }
}