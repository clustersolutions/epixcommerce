<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Services\Action\Uninstall;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\HTML;
  use OSC\Core\OSCOM;
  use OSC\Core\Registry;
  use OSC\Core\Site\Admin\Application\Services\Services;

/**
 * @since v3.0.2
 */

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $data = HTML::sanitize(basename($_GET['code']));

      if ( Services::uninstall($data) ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
      }

      OSCOM::redirect(OSCOM::getLink());
    }
  }
?>
