<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\Languages\Languages;

  class DeleteGroup {
    public static function execute(ApplicationAbstract $application) {
      if ( Languages::isGroup($_GET['id'], $_GET['group']) ) {
        $application->setPageContent('groups_delete.php');
      }
    }
  }
?>
