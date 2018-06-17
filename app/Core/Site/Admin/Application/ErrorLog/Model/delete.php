<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ErrorLog\Model;

  use OSC\Core\ErrorHandler;

  class delete {
    public static function execute() {
      ErrorHandler::clear();

      return true;
    }
  }
?>
