<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Login\Model;

  use OSC\Core\OSCOM;

  class getAdmin {
    public static function execute($username, $key = null) {
      $data = array('username' => $username);

      $result = OSCOM::callDB('Admin\Login\GetAdmin', $data);

      if ( isset($key) ) {
        $result = $result[$key] ?: null;
      }

      return $result;
    }
  }
?>
