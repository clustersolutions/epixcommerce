<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Search\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Help {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_Template = Registry::get('Template');
      $OSCOM_NavigationHistory = Registry::get('NavigationHistory');

// HPDL
      $OSCOM_Template->setHasHeader(false);
      $OSCOM_Template->setHasFooter(false);
      $OSCOM_Template->setHasBoxModules(false);
      $OSCOM_Template->setHasContentModules(false);
      $OSCOM_Template->setShowDebugMessages(false);

      $OSCOM_NavigationHistory->removeCurrentPage();

      $application->setPageTitle(OSCOM::getDef('search_heading'));
      $application->setPageContent('help.php');
    }
  }
?>
