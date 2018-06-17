<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Model;

  use OSC\Core\Site\Admin\Application\Languages\Languages;

  class exists {
    public static function execute($id) {
      return ( Languages::get($id) !== false );
    }
  }
?>
