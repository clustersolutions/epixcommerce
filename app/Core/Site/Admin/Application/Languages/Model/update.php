<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Model;

  use OSC\Core\OSCOM;
  use OSC\Core\Cache;

  class update {
    public static function execute($data) {
      if ( OSCOM::callDB('Admin\Languages\Update', $data) ) {
        Cache::clear('languages');

        if ( $data['set_default'] === true ) {
          Cache::clear('configuration');
        }

        return true;
      }

      return false;
    }
  }
?>
