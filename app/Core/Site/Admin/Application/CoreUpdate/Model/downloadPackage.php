<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\CoreUpdate\Model;

  use OSC\Core\Site\Admin\Application\CoreUpdate\CoreUpdate;
  use OSC\Core\HttpRequest;
  use OSC\Core\OSCOM;

  class downloadPackage {
    public static function execute($version = null) {
      if ( empty($version) ) {
        $link = CoreUpdate::getAvailablePackageInfo('update_package');
      } else {
        $versions = CoreUpdate::getAvailablePackages();

        foreach ( $versions['entries'] as $v ) {
          if ( $v['version'] == $version ) {
            $link = $v['update_package'];

            break;
          }
        }
      }

      $response = HttpRequest::getResponse(array('url' => $link, 'parameters' => 'check=true'));

      return file_put_contents(OSCOM::BASE_DIRECTORY . 'Work/CoreUpdate/update.phar', $response);
    }
  }
?>
