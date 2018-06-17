<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Services\Model;

  use OSC\Core\OSCOM;
  use OSC\Core\Cache;

/**
 * @since v3.0.2
 */

  class save {
    public static function execute($data) {
      if ( OSCOM::callDB('Admin\Services\Save', $data) ) {
        Cache::clear('configuration');

        return true;
      }

      return false;
    }
  }
?>
