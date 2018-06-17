<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Cart\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Update {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');

      if ( isset($_POST['products']) && is_array($_POST['products']) && !empty($_POST['products']) ) {
        foreach ( $_POST['products'] as $item_id => $quantity ) {
          if ( !is_numeric($item_id) || !is_numeric($quantity) ) {
            return false;
          }

          $OSCOM_ShoppingCart->update($item_id, $quantity);
        }
      }

      OSCOM::redirect(OSCOM::getLink(null, 'Cart'));
    }
  }
?>
