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

  class LogIn {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_Session = Registry::get('Session');
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');

// redirect the customer to a friendly cookies-must-be-enabled page if cookies
// are disabled (or the session has not started)
      if ( $OSCOM_Session->hasStarted() === false ) {
        OSCOM::redirect(OSCOM::getLink(null, 'Info', 'Cookies'));
      }

      $application->setPageTitle(OSCOM::getDef('sign_in_heading'));
      $application->setPageContent('login.php');

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_sign_in'), OSCOM::getLink(null, null, 'LogIn', 'SSL'));
      }
    }
  }
?>
