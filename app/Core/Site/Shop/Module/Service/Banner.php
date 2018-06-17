<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\Service;

  use OSC\Core\Registry;
  use OSC\Core\Site\Shop\Banner as BannerClass;

  class Banner implements \OSC\Core\Site\Shop\ServiceInterface {
    public static function start() {
      Registry::set('Banner', new BannerClass());

      $OSCOM_Banner = Registry::get('Banner');

      $OSCOM_Banner->activateAll();
      $OSCOM_Banner->expireAll();

      return true;
    }

    public static function stop() {
      return true;
    }
  }
?>
