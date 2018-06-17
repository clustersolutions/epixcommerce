<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Configuration\Model;

  use OSC\Core\OSCOM;
  use OSC\Core\Cache;

  class saveEntry {
    public static function execute($data) {
      if ( OSCOM::callDB('Admin\Configuration\EntrySave', $data) ) {
        Cache::clear('configuration');

        return true;
      }

      return false;
    }
  }
?>
