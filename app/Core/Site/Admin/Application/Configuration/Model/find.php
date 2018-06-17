<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Configuration\Model;

  use OSC\Core\OSCOM;

  class find {
    public static function execute($search) {
      $data = array('search' => $search);

      return OSCOM::callDB('Admin\Configuration\Find', $data);
    }
  }
?>
