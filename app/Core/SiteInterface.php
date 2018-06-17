<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core;

  interface SiteInterface {
    public static function initialize();

    public static function getDefaultApplication();

    public static function hasAccess($application);
  }
?>
