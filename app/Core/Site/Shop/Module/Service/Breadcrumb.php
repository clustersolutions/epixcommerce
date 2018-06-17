<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\Service;

  use OSC\Core\Registry;
  use OSC\Core\OSCOM;
  use OSC\Core\Site\Shop\Breadcrumb as BreadcrumbClass;

  class Breadcrumb implements \OSC\Core\Site\Shop\ServiceInterface {
    public static function start() {
      Registry::set('Breadcrumb', new BreadcrumbClass());

      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');

      $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_top'), OSCOM::getLink(OSCOM::getDefaultSite(), OSCOM::getDefaultSiteApplication()));
      $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_shop'), OSCOM::getLink('Shop', 'Index'));

      return true;
    }

    public static function stop() {
      return true;
    }
  }
?>
