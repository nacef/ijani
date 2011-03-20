<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of componentsclass
 *
 * @author nacef
 */
class commonComponents extends sfComponents {

  public function executeFilter() {
    $this->searchForm = new SearchForm();
  }
}
?>
