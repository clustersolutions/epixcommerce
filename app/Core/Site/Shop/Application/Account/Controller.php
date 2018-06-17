<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Account;

  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Site\Shop\ApplicationAbstract {
    protected function initialize() {
      $OSCOM_Language = Registry::get('Language');
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');

      $OSCOM_Language->load('account');

      $this->_page_title = OSCOM::getDef('account_heading');

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_my_account'), OSCOM::getLink(null, null, null, 'SSL'));
      }
    }
  }
?>
