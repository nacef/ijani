<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version20 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('presta', 'locality_id', 'integer', '8', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('presta', 'locality_id');
    }
}