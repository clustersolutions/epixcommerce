<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Search;

  use OSC\Core\Registry;
  use OSC\Core\OSCOM;
  use OSC\Core\Site\Shop\Search;

  class Controller extends \OSC\Core\Site\Shop\ApplicationAbstract {
    protected function initialize() {
      $OSCOM_Language = Registry::get('Language');
      $OSCOM_Template = Registry::get('Template');
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');

      $OSCOM_Language->load('search');

      $this->_page_title = OSCOM::getDef('search_heading');

      $OSCOM_Template->addJavascriptPhpFilename(OSCOM::BASE_DIRECTORY . 'Core/Site/Shop/assets/search.php');

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_search'), OSCOM::getLink());
      }

      Registry::set('Search', new Search());
    }
  }
?>
