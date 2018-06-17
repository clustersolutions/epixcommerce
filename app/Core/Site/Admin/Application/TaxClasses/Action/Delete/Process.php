<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\TaxClasses\Action\Delete;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\TaxClasses\TaxClasses;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      if ( TaxClasses::delete($_GET['id']) ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
      }

      OSCOM::redirect(OSCOM::getLink());
    }
  }
?>
