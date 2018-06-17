<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\PaymentModules\Action\Install;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\HTML;
  use OSC\Core\OSCOM;
  use OSC\Core\Registry;
  use OSC\Core\Site\Admin\Application\PaymentModules\PaymentModules;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $data = HTML::sanitize(basename($_GET['code']));

      if ( PaymentModules::install($data) ) {
        OSCOM::redirect(OSCOM::getLink(null, null, 'Save&code=' . $_GET['code']));
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');

        OSCOM::redirect(OSCOM::getLink());
      }
    }
  }
?>
