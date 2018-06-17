<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\CoreUpdate\Model;

  use OSC\Core\Site\Admin\Application\CoreUpdate\CoreUpdate;

  class packageExists {
    public static function execute($version) {
      $versions = CoreUpdate::getAvailablePackages();

      foreach ( $versions['entries'] as $v ) {
        if ( $v['version'] == $version ) {
          return true;
        }
      }

      return false;
    }
  }
?>
