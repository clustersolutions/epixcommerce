<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Model;

  use OSC\Core\OSCOM;

  class getGroup {
    public static function execute($group) {
      $data = array('group' => $group);

      return OSCOM::callDB('Admin\Languages\GetGroup', $data);
    }
  }
?>
