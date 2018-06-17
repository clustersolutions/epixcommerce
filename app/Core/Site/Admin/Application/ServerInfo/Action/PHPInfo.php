<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ServerInfo\Action;

  use OSC\Core\ApplicationAbstract;

  class PHPInfo {
    public static function execute(ApplicationAbstract $application) {
      phpinfo();
      exit;
    }
  }
?>
