<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ProductAttributes;

  use OSC\Core\OSCOM;

/**
 * @since v3.0.3
 */

  class Controller extends \OSC\Core\Site\Admin\ApplicationAbstract {
    protected $_group = 'modules';
    protected $_icon = 'productattributes.png';
    protected $_sort_order = 600;

    protected function initialize() {
      $this->_title = OSCOM::getDef('app_title');
    }

    protected function process() {
      $this->_page_title = OSCOM::getDef('heading_title');
    }
  }
?>
