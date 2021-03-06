<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version17 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('locality', 'locality_town_id_town_id', array(
             'name' => 'locality_town_id_town_id',
             'local' => 'town_id',
             'foreign' => 'id',
             'foreignTable' => 'town',
             ));
        $this->addIndex('locality', 'locality_town_id', array(
             'fields' => 
             array(
              0 => 'town_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('locality', 'locality_town_id_town_id');
        $this->removeIndex('locality', 'locality_town_id', array(
             'fields' => 
             array(
              0 => 'town_id',
             ),
             ));
    }
}