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

  class setStatus {
    public static function execute($id, $status) {
      $data = array('id' => $id,
                    'status' => $status);

      if ( OSCOM::callDB('Admin\CreditCards\SetStatus', $data) ) {
        Cache::clear('credit-cards');

        return true;
      }

      return false;
    }
  }
?>
