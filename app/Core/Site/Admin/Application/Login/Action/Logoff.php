<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Login\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Logoff {
    public static function execute(ApplicationAbstract $application) {
      unset($_SESSION[OSCOM::getSite()]);

      Registry::get('MessageStack')->add('header', OSCOM::getDef('ms_success_logged_out'), 'success');

      OSCOM::redirect(OSCOM::getLink(null, OSCOM::getDefaultSiteApplication()));
    }
  }
?>
