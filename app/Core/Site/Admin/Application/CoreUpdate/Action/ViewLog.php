<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\CoreUpdate\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\OSCOM;
  use OSC\Core\Registry;
  use OSC\Core\Site\Admin\Application\CoreUpdate\CoreUpdate;

/**
 * @since v3.0.2
 */

  class ViewLog {
    public static function execute(ApplicationAbstract $application) {
      if ( !isset($_GET['log']) || empty($_GET['log']) ) {
        OSCOM::redirect(OSCOM::getLink());
      }

      if ( !CoreUpdate::logExists($_GET['log']) ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_log_file_does_not_exist'), 'error');

        OSCOM::redirect(OSCOM::getLink());
      }

      $application->setPageContent('view_log.php');
    }
  }
?>
