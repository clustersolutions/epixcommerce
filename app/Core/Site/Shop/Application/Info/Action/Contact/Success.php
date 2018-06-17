<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Info\Action\Contact;

  use OSC\Core\ApplicationAbstract;

  class Success {
    public static function execute(ApplicationAbstract $application) {
      $application->setPageContent('contact_success.php');
    }
  }
?>
