<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\Template\Value\page_icon;

  use OSC\Core\Registry;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      $OSCOM_Application = Registry::get('Application');
      $OSCOM_Template = Registry::get('Template');

      return $OSCOM_Template->getIcon(32, $OSCOM_Application->getIcon());
    }
  }
?>
