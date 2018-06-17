<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\TaxClasses;

  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Site\Admin\ApplicationAbstract {
    protected $_group = 'configuration';
    protected $_icon = 'taxclasses.png';
    protected $_sort_order = 800;

    protected function initialize() {
      $this->_title = OSCOM::getDef('app_title');
    }

    protected function process() {
      $this->_page_title = OSCOM::getDef('heading_title');

      if ( isset($_GET['id']) && is_numeric($_GET['id']) ) {
        $this->_page_contents = 'entries.php';
        $this->_page_title .= ': ' . TaxClasses::get($_GET['id'], 'tax_class_title');
      }
    }
  }
?>
