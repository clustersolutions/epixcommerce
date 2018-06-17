<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Configuration\Action;

  use OSC\Core\ApplicationAbstract;

  class BatchSaveEntries {
    public static function execute(ApplicationAbstract $application) {
      if ( isset($_POST['batch']) && is_array($_POST['batch']) && !empty($_POST['batch']) ) {
        $application->setPageContent('entries_batch_edit.html');
      }
    }
  }
?>
