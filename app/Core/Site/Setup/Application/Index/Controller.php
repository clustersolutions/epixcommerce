<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Setup\Application\Index;

  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Site\Setup\ApplicationAbstract {
    protected function initialize() {
      $this->_page_title = OSCOM::getDef('page_title_welcome');
    }
  }
?>
