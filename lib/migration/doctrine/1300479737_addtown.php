<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addtown extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('town', array(
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
             'state_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
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
        $this->dropTable('town');
    }
}