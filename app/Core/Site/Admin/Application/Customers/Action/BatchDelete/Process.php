<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Customers\Action\BatchDelete;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\Customers\Customers;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

/**
 * @since v3.0.2
 */

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $error = false;

      foreach ( $_POST['batch'] as $id ) {
        if ( !Customers::delete($id) ) {
          $error = true;
          break;
        }
      }

      if ( $error === false ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
      }

      OSCOM::redirect(OSCOM::getLink());
    }
  }
?>
