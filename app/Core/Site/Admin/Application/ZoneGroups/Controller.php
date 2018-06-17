<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ZoneGroups;

  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Site\Admin\ApplicationAbstract {
    protected $_group = 'configuration';
    protected $_icon = 'zonegroups.png';
    protected $_sort_order = 700;

    protected function initialize() {
      $this->_title = OSCOM::getDef('app_title');
    }

    protected function process() {
      $this->_page_title = OSCOM::getDef('heading_title');

      if ( isset($_GET['id']) && is_numeric($_GET['id']) ) {
        $this->_page_contents = 'entries.php';
        $this->_page_title .= ': ' . ZoneGroups::get($_GET['id'], 'geo_zone_name');
      }
    }
  }
?>
