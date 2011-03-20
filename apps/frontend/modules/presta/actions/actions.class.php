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
    $domain_id = $request->getParameter("domain");
    $locality_id = $request->getParameter("locality");
    $this->prestas = PrestaTable::getInstance()->getByDomainAndLocality($domain_id, $locality_id);
  }
}
