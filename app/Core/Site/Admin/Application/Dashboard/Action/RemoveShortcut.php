<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Dashboard\Action;

  use OSC\Core\Access;
  use OSC\Core\ApplicationAbstract;
  use OSC\Core\HTML;
  use OSC\Core\OSCOM;
  use OSC\Core\Registry;
  use OSC\Core\Site\Admin\Application\Dashboard\Dashboard;

  class RemoveShortcut {
    public static function execute(ApplicationAbstract $application) {
      if ( !empty($_GET['shortcut']) ) {
        $application = HTML::sanitize($_GET['shortcut']);

        if ( OSCOM::siteApplicationExists($application) ) {
          if ( Dashboard::deleteShortcut($_SESSION[OSCOM::getSite()]['id'], $application) ) {
            $_SESSION[OSCOM::getSite()]['access'] = Access::getUserLevels($_SESSION[OSCOM::getSite()]['id']);

            Registry::get('MessageStack')->add('header', OSCOM::getDef('ms_success_shortcut_removed'), 'success');

            OSCOM::redirect(OSCOM::getLink(null, $application));
          }
        }
      }

      OSCOM::redirect(OSCOM::getLink());
    }
  }
?>
