<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Checkout\Action\Billing;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;
  use OSC\Core\ObjectInfo;

  class Address {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_Template = Registry::get('Template');
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');
      $OSCOM_Customer = Registry::get('Customer');
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');

      global $osC_oiAddress;

      $application->setPageTitle(OSCOM::getDef('payment_address_heading'));
      $application->setPageContent('billing_address.php');

      $OSCOM_Template->addJavascriptFilename(OSCOM::getPublicSiteLink('javascript/checkout_payment_address.js'));
      $OSCOM_Template->addJavascriptPhpFilename(OSCOM::BASE_DIRECTORY . 'Core/Site/Shop/assets/form_check.js.php');

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_checkout_payment_address'), OSCOM::getLink(null, null, 'Billing&Address', 'SSL'));
      }

      if ( !$OSCOM_Customer->isLoggedOn() ) {
        $osC_oiAddress = new ObjectInfo($OSCOM_ShoppingCart->getShippingAddress());
      }
    }
  }
?>
