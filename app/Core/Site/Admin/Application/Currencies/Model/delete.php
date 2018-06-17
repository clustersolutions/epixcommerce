<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Currencies\Model;

  use OSC\Core\OSCOM;
  use OSC\Core\Cache;

  class delete {
    public static function execute($id) {
      $data = array('id' => $id);

      if ( OSCOM::callDB('Admin\Currencies\Delete', $data) ) {
        Cache::clear('currencies');

        return true;
      }

      return false;
    }
  }
?>
