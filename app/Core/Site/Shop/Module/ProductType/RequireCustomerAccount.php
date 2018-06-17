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

  class RequireCustomerAccount {
    public static function getTitle() {
      return 'Require Customer Account';
    }

    public static function getDescription() {
      return 'Require customer account';
    }

    public static function isValid(Product $OSCOM_Product) {
      $OSCOM_Customer = Registry::get('Customer');

      return $OSCOM_Customer->isLoggedOn();
    }

    public static function onFail(Product $OSCOM_Product) {
      $OSCOM_NavigationHistory = Registry::get('NavigationHistory');

      $OSCOM_NavigationHistory->setSnapshot();

      OSCOM::redirect(OSCOM::getLink(null, 'Account', 'LogIn', 'SSL'));
    }
  }
?>
