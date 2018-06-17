<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Configuration;

  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Site\Admin\ApplicationAbstract {
    protected $_group = 'configuration';
    protected $_icon = 'configuration.png';
    protected $_sort_order = 200;
    protected $_page_contents = 'main.html'; // HPDL (html should be the default)

    protected function initialize() {
      $this->_title = OSCOM::getDef('app_title');
    }

    protected function process() {
      $this->_page_title = OSCOM::getDef('heading_title');

      if ( isset($_GET['id']) && is_numeric($_GET['id']) ) {
        $this->_page_contents = 'entries.html';
        $this->_page_title .= ': ' . Configuration::get($_GET['id'], 'configuration_group_title');
      }
    }
  }
?>
