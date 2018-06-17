<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ErrorLog;

  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Site\Admin\ApplicationAbstract {
    protected $_group = 'tools';
    protected $_icon = 'errorlog.png';
    protected $_sort_order = 10;
    protected $_shortcut_callback = 'new_errors';

    protected function initialize() {
      $this->_title = OSCOM::getDef('app_title');
    }

    protected function process() {
      $this->_page_title = OSCOM::getDef('heading_title');
    }
  }
?>
