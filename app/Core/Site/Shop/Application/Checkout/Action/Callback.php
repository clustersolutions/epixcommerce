<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Checkout\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\HTML;

  class Callback {
    public static function execute(ApplicationAbstract $application) {
      if ( isset($_GET['module']) && !empty($_GET['module']) ) {
        $module = HTML::sanitize($_GET['module']);

        if ( class_exists('OSC\\Core\\Site\\Shop\\Module\\Payment\\' . $module) ) {
          $module = 'OSC\\Core\\Site\\Shop\\Module\\Payment\\' . $module;
          $module = new $module();
          $module->callback();
        }
      }

      exit;
    }
  }
?>
