<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Action;

  use OSC\Core\ApplicationAbstract;

  class EditDefinition {
    public static function execute(ApplicationAbstract $application) {
      $application->setPageContent('definitions_edit.php');
    }
  }
?>
