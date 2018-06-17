<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Configuration\Action;

  use OSC\Core\ApplicationAbstract;

  class EntrySave {
    public static function execute(ApplicationAbstract $application) {
      $application->setPageContent('entries_edit.html');
    }
  }
?>
