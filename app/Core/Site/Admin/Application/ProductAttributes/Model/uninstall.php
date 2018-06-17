<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ProductAttributes\Model;

/**
 * @since v3.0.3
 */

  class uninstall {
    public static function execute($module) {
      $class = 'OSC\\Core\\Site\\Admin\\Module\\ProductAttribute\\' . $module;

      if ( class_exists($class) ) {
        $OSCOM_PA = new $class();
        $OSCOM_PA->uninstall();

        return true;
      }

      return false;
    }
  }
?>
