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
  use OSC\Core\Registry;
  use OSC\Core\Site\Admin\CategoryTree;
  use OSC\Core\Site\Admin\Application\Categories\Categories;

/**
 * @since v3.0.2
 */

  class delete {
    public static function execute($id) {
      if ( Registry::exists('CategoryTree') ) {
        $OSCOM_CategoryTree = Registry::get('CategoryTree');
      } else {
        $OSCOM_CategoryTree = new CategoryTree();
        Registry::set('CategoryTree', $OSCOM_CategoryTree);
      }

      $data = array('id' => $id);

      foreach ( array_merge(array($data['id']), $OSCOM_CategoryTree->getChildren($data['id'])) as $c ) {
        Categories::deleteImage($c);
      }

      if ( OSCOM::callDB('Admin\Categories\Delete', $data) ) {
        Cache::clear('categories');
        Cache::clear('category_tree');
        Cache::clear('also_purchased');

        return true;
      }

      return false;
    }
  }
?>
