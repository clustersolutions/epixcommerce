<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\Service;

  use OSC\Core\Registry;
  use OSC\Core\Site\Shop\RecentlyVisited as RecentlyVisitedClass;

  class RecentlyVisited implements \OSC\Core\Site\Shop\ServiceInterface {
    public static function start() {
      $OSCOM_Service = Registry::get('Service');

      Registry::set('RecentlyVisited', new RecentlyVisitedClass());

      $OSCOM_Service->addCallBeforePageContent('RecentlyVisited', 'initialize');

      return true;
    }

    public static function stop() {
      return true;
    }
  }
?>
