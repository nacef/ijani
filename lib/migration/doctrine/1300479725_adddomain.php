<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Adddomain extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('domain', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'nom' => 
             array(
              'type' => 'string',
              'length' => 50,
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
        $this->dropTable('domain');
    }
}