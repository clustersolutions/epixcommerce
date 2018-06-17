<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Categories\Model;

  use OSC\Core\Cache;
  use OSC\Core\OSCOM;

/**
 * @since v3.0.2
 */

  class saveSortOrder {
    public static function execute($data) {
      if ( OSCOM::callDB('Admin\Categories\SaveSortOrder', $data) ) {
        Cache::clear('categories');
        Cache::clear('category_tree');
        Cache::clear('also_purchased');

        return true;
      }

      return false;
    }
  }
?>
