<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Services\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\HTML;
  use OSC\Core\OSCOM;
  use OSC\Core\Site\Admin\Application\Services\Services;

/**
 * @since v3.0.2
 */

  class Uninstall {
    public static function execute(ApplicationAbstract $application) {
      $data = HTML::sanitize(basename($_GET['code']));

      if ( !Services::exists($data) || (Services::get($data, 'uninstallable') !== true) ) {
        OSCOM::redirect(OSCOM::getLink());
      }
    }
  }
?>
