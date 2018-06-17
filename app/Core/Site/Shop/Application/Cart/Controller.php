<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Cart;

  use OSC\Core\Registry;
  use OSC\Core\OSCOM;
  use OSC\Core\Site\Shop\Product;

  class Controller extends \OSC\Core\Site\Shop\ApplicationAbstract {
    protected function initialize() {
      $OSCOM_Language = Registry::get('Language');
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');

      $OSCOM_Language->load('checkout');

      $this->_page_title = OSCOM::getDef('shopping_cart_heading');

      if ( !$OSCOM_ShoppingCart->hasContents() ) {
        $this->_page_contents = 'empty.php';
      }

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_checkout_shopping_cart'), OSCOM::getLink(null, null, null, 'SSL'));
      }
    }

    public function requireCustomerAccount() {
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');

      foreach ( $OSCOM_ShoppingCart->getProducts() as $product ) {
        $OSCOM_Product = new Product($product['id']);

        if ( $OSCOM_Product->isTypeActionAllowed(array('PerformOrder', 'RequireCustomerAccount'), null, false) ) {
          return true;
        }
      }

      return false;
    }
  }
?>
