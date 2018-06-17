<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\TaxClasses\RPC;

  use OSC\Core\Site\Admin\Application\TaxClasses\TaxClasses;
  use OSC\Core\Site\RPC\Controller as RPC;

  class GetAllEntries {
    public static function execute() {
      if ( !isset($_GET['search']) ) {
        $_GET['search'] = '';
      }

      if ( !empty($_GET['search']) ) {
        $result = TaxClasses::findEntries($_GET['search'], $_GET['id']);
      } else {
        $result = TaxClasses::getAllEntries($_GET['id']);
      }

      $result['rpcStatus'] = RPC::STATUS_SUCCESS;

      echo json_encode($result);
    }
  }
?>
