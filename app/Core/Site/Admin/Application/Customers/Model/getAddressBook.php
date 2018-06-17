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

  class getAddressBook {
    public static function execute($customer_id) {
      $data = array('customer_id' => $customer_id);

      return OSCOM::callDB('Admin\Customers\GetAddressBook', $data);
    }
  }
?>
