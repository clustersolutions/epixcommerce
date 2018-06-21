<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Account\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class LogOff {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');
      $OSCOM_Customer = Registry::get('Customer');

      $application->setPageTitle(OSCOM::getDef('sign_out_heading'));
      $application->setPageContent('logoff.php');

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_sign_out'));
      }

      $OSCOM_Customer->reset();

      $OSCOM_ShoppingCart->reset();
    }
  }
?>
