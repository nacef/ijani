<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Adduser extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('user', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'first_name' => 
             array(
              'type' => 'string',
              'length' => 50,
             ),
             'last_name' => 
             array(
              'type' => 'string',
              'length' => 50,
             ),
             'address' => 
             array(
              'type' => 'text',
              'length' => NULL,
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
        $this->dropTable('user');
    }
}