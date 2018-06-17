<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\Box\Information;

  use OSC\Core\HTML;
  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Modules {
    var $_title,
        $_code = 'Information',
        $_author_name = 'osCommerce',
        $_author_www = 'http://www.oscommerce.com',
        $_group = 'Box';

    public function __construct() {
      $this->_title = OSCOM::getDef('box_information_heading');
    }

    function initialize() {
      $this->_title_link = OSCOM::getLink(null, 'Info');

      $this->_content = '<ol style="list-style: none; margin: 0; padding: 0;">' .
                        '  <li>' . HTML::link(OSCOM::getLink(null, 'Info', 'Shipping'), OSCOM::getDef('box_information_shipping')) . '</li>' .
                        '  <li>' . HTML::link(OSCOM::getLink(null, 'Info', 'Privacy'), OSCOM::getDef('box_information_privacy')) . '</li>' .
                        '  <li>' . HTML::link(OSCOM::getLink(null, 'Info', 'Conditions'), OSCOM::getDef('box_information_conditions')) . '</li>' .
                        '  <li>' . HTML::link(OSCOM::getLink(null, 'Info', 'Contact'), OSCOM::getDef('box_information_contact')) . '</li>' .
                        '  <li>' . HTML::link(OSCOM::getLink(null, 'Info', 'Sitemap'), OSCOM::getDef('box_information_sitemap')) . '</li>' .
                        '</ol>';
    }
  }
?>
