<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Administrators\Model;

  use OSC\Core\OSCOM;

  class delete {
    public static function execute($id) {
      $data = array('id' => $id);

      return OSCOM::callDB('Admin\Administrators\Delete', $data);
    }
  }
?>
