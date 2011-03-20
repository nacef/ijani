<?php

/**
 * location actions.
 *
 * @package    ijani
 * @subpackage location
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class locationActions extends sfActions
{
 /**
  * Action to return towns by state
  *
  * @param sfRequest $request A request object
  */
  public function executeTowns(sfWebRequest $request)
  {
    if ($state_id = $request->getParameter('state_id')) {
      $this->towns = TownTable::getInstance()->getByStateId($state_id);
    }
  }

  public function executeLocalities(sfWebRequest $request)
  {
    if ($town_id = $request->getParameter('town_id')) {
      $this->localities = LocalityTable::getInstance()->getByTownId($town_id);
    }
  }


}
