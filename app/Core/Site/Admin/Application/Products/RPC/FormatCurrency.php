<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Products\RPC;

  use OSC\Core\Registry;
  use OSC\Core\Site\RPC\Controller as RPC;
  use OSC\Core\Site\Shop\Currencies;

/**
 * @since v3.0.3
 */

  class FormatCurrency {
    public static function execute() {
      if ( !Registry::exists('Currencies') ) {
        Registry::set('Currencies', new Currencies());
      }

      $OSCOM_Currencies = Registry::get('Currencies');

      $result = array('value' => $OSCOM_Currencies->format($_GET['value']),
                      'rpcStatus' => RPC::STATUS_SUCCESS);

      echo json_encode($result);
    }
  }
?>
