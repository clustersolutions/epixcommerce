<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\CreditCards\Model;

  use OSC\Core\OSCOM;
  use OSC\Core\Cache;

  class save {
    public static function execute($id = null, $data) {
      if ( is_numeric($id) ) {
        $data['id'] = $id;
      }

      if ( OSCOM::callDB('Admin\CreditCards\Save', $data) ) {
        Cache::clear('credit-cards');

        return true;
      }

      return false;
    }
  }
?>
