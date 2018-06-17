<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Customers\RPC;

  use OSC\Core\Site\RPC\Controller as RPC;
  use OSC\Core\Site\Shop\Address;

/**
 * @since v3.0.2
 */

  class GetZones {
    public static function execute() {
      $result = array('zones' => Address::getZones($_GET['country_id']),
                      'rpcStatus' => RPC::STATUS_SUCCESS);

      echo json_encode($result);
    }
  }
?>
