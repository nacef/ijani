<?php

/**
 * presta actions.
 *
 * @package    ijani
 * @subpackage presta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class prestaActions extends sfActions
{
  public function executeSearch(sfWebRequest $request)
  {
    $domain_id = $request->getParameter("domain", null);
    $locality_id = $request->getParameter("locality", null);
    $town_id = $request->getParameter("town", null);
    $state_id = $request->getParameter("state", null);

    if ($domain_id) {
      if ($locality_id) {
        $this->prestas = PrestaTable::getInstance()->getByDomainAndLocality($domain_id, $locality_id);
      }
      else if ($town_id) {
        $this->prestas = PrestaTable::getInstance()->getByDomainAndTown($domain_id, $town_id);
      } else {
        $this->prestas = PrestaTable::getInstance()->getByDomainAndState($domain_id, $state_id);
      }
    } else {
      if ($locality_id) {
        $this->prestas = PrestaTable::getInstance()->getByLocality($locality_id);
      } else if ($town_id) {
        $this->prestas = PrestaTable::getInstance()->getByTown($town_id);
      } else {
        $this->prestas = PrestaTable::getInstance()->getByState($state_id);
      }
    }
  }

  public function executeDetails(sfWebRequest $request) {
    $this->forward404Unless($presta_id = $request->getParameter('id'));
    $this->presta = PrestaTable::getInstance()->find($presta_id);
  }

  public function executeRating(sfWebRequest $request) {
    $this->ratingForm = new RatingForm();
  }
}
