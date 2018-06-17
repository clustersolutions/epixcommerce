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

  class Password {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_Customer = Registry::get('Customer');
      $OSCOM_NavigationHistory = Registry::get('NavigationHistory');
      $OSCOM_Template = Registry::get('Template');
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');

      if ( $OSCOM_Customer->isLoggedOn() === false ) {
        $OSCOM_NavigationHistory->setSnapshot();

        OSCOM::redirect(OSCOM::getLink(null, null, 'LogIn', 'SSL'));
      }

      $application->setPageTitle(OSCOM::getDef('account_password_heading'));
      $application->setPageContent('password.php');

      $OSCOM_Template->addJavascriptPhpFilename(OSCOM::BASE_DIRECTORY . 'Core/Site/Shop/assets/form_check.js.php');

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_edit_password'), OSCOM::getLink(null, null, 'Password', 'SSL'));
      }
    }
  }
?>
