<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Account\Action\Create;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\OSCOM;

  class Success {
    public static function execute(ApplicationAbstract $application) {
      $application->setPageTitle(OSCOM::getDef('create_account_success_heading'));
      $application->setPageContent('create_success.php');
    }
  }
?>
