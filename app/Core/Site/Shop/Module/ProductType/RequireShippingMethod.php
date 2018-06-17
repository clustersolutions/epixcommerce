<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\ProductType;

  use OSC\Core\OSCOM;
  use OSC\Core\Registry;
  use OSC\Core\Site\Shop\Product;

  class RequireShippingMethod {
    public static function getTitle() {
      return 'Require Shipping Method';
    }

    public static function getDescription() {
      return 'Require shipping method';
    }

    public static function isValid(Product $OSCOM_Product) {
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');

      return $OSCOM_ShoppingCart->hasShippingMethod();
    }

    public static function onFail(Product $OSCOM_Product) {
      $OSCOM_NavigationHistory = Registry::get('NavigationHistory');

      if ( !isset($_GET['Shipping']) ) {
        $OSCOM_NavigationHistory->setSnapshot();

        OSCOM::redirect(OSCOM::getLink(null, 'Checkout', 'Shipping', 'SSL'));
      }
    }
  }
?>
