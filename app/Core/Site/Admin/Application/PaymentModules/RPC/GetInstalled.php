<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\PaymentModules\RPC;

  use OSC\Core\Site\Admin\Application\PaymentModules\PaymentModules;
  use OSC\Core\Site\RPC\Controller as RPC;

  class GetInstalled {
    public static function execute() {
      if ( !isset($_GET['search']) ) {
        $_GET['search'] = '';
      }

      if ( !empty($_GET['search']) ) {
        $result = PaymentModules::findInstalled($_GET['search']);
      } else {
        $result = PaymentModules::getInstalled();
      }

      $result['rpcStatus'] = RPC::STATUS_SUCCESS;

      echo json_encode($result);
    }
  }
?>
