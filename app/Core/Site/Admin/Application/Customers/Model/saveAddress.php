<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Customers\Model;

  use OSC\Core\OSCOM;

/**
 * @since v3.0.2
 */

  class saveAddress {
    public static function execute($data) {
      return OSCOM::callDB('Admin\Customers\SaveAddress', $data);
    }
  }
?>
