<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\Template\Value\oscom_version;

  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      return OSCOM::getVersion();
    }
  }
?>
