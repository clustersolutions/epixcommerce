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

  class deleteGroup {
    public static function execute($group) {
      $data = array('group' => $group);

      if ( OSCOM::callDB('Admin\Languages\DeleteGroup', $data) ) {
        Cache::clear('languages');

        return true;
      }

      return false;
    }
  }
?>
