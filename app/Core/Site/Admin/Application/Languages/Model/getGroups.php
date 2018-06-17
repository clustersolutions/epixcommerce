<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Model;

  use OSC\Core\OSCOM;

  class getGroups {
    public static function execute($language_id) {
      $data = array('id' => $language_id);

      return OSCOM::callDB('Admin\Languages\GetGroups', $data);
    }
  }
?>
