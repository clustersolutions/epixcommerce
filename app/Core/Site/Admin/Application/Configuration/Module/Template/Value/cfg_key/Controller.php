<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Configuration\Module\Template\Value\cfg_key;

  use OSC\Core\ObjectInfo;
  use OSC\Core\Site\Admin\Application\Configuration\Configuration;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      $OSCOM_ObjectInfo = new ObjectInfo(Configuration::getEntry($_GET['pID']));

      return $OSCOM_ObjectInfo->getProtected('configuration_key');
    }
  }
?>
