<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Administrators\Model;

  use OSC\Core\Hash;
  use OSC\Core\OSCOM;

  class save {
    public static function execute($data) {
      if ( !empty($data['password']) ) {
        $data['password'] = Hash::get(trim($data['password']));
      }

      return OSCOM::callDB('Admin\Administrators\Save', $data);
    }
  }
?>
