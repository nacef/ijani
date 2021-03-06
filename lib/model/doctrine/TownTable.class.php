<?php

/**
 * TownTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TownTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object TownTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Town');
    }

    public function getByStateId($state_id) {
      return $this->createQuery('t')
              ->where('t.state_id = ?', $state_id)
              ->orderBy('t.name ASC')
              ->execute();
    }
}