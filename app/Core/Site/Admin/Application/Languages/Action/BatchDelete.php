<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Action;

  use OSC\Core\ApplicationAbstract;

  class BatchDelete {
    public static function execute(ApplicationAbstract $application) {
      if ( isset($_POST['batch']) && is_array($_POST['batch']) && !empty($_POST['batch']) ) {
        $application->setPageContent('batch_delete.php');
      }
    }
  }
?>
