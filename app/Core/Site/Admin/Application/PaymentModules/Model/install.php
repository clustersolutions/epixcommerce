<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\PaymentModules\Model;

  use OSC\Core\Registry;
  use OSC\Core\Cache;

  class install {
    public static function execute($module) {
      $OSCOM_Language = Registry::get('Language');

      $class = 'OSC\\Core\\Site\\Admin\\Module\\Payment\\' . $module;

      if ( class_exists($class) ) {
        $OSCOM_Language->injectDefinitions('modules/payment/' . $module . '.xml');

        $OSCOM_PM = new $class();
        $OSCOM_PM->install();

        Cache::clear('modules-payment');
        Cache::clear('configuration');

        return true;
      }

      return false;
    }
  }
?>
