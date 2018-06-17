<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Services\Model;

/**
 * @since v3.0.2
 */

  class exists {
    public static function execute($code) {
      return class_exists('OSC\\Core\\Site\\Admin\\Module\\Service\\' . $code);
    }
  }
?>
