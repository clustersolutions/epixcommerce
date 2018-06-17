<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Checkout\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');
      $OSCOM_PaymentModule = Registry::get('PaymentModule');

      $OSCOM_PaymentModule->process();

      OSCOM::redirect(OSCOM::getLink(null, null, 'Success', 'SSL'));
    }
  }
?>
