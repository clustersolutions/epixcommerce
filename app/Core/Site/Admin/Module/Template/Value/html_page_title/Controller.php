<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\Template\Value\html_page_title;

  use OSC\Core\Registry;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      $OSCOM_Template = Registry::get('Template');

      return 'OSCOMMERCE' . ($OSCOM_Template->hasPageTitle() ? ': ' . $OSCOM_Template->getPageTitle() : '');
    }
  }
?>
