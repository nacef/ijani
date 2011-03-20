<?php

/**
 * script actions.
 *
 * @package    ijani
 * @subpackage script
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class scriptActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeLoad(sfWebRequest $request)
  {
    $this->setLayout(false);
    $this->getResponse()->setContent('text/javascript');
    $this->setTemplate($request->getParameter('filename'));
    return ".js".chr(0);
  }
}
