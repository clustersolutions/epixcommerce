<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Currencies\Action;

  use OSC\Core\ApplicationAbstract;

  class UpdateRates {
    public static function execute(ApplicationAbstract $application) {
      $application->setPageContent('update_rates.php');
    }
  }
?>
