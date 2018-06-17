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

  class Delete {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_ShoppingCart = Registry::get('ShoppingCart');

      if ( is_numeric($_GET['Delete']) ) {
        $OSCOM_ShoppingCart->remove($_GET['Delete']);
      }

      OSCOM::redirect(OSCOM::getLink(null, 'Cart'));
    }
  }
?>
