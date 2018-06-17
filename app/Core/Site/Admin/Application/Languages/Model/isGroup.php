<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Model;

  use OSC\Core\OSCOM;

  class isGroup {
    public static function execute($language_id, $group) {
      $result = OSCOM::callDB('Admin\Languages\GetGroup', array('group' => $group));

      foreach ( $result['entries'] as $entry ) {
        if ( $entry['languages_id'] == $language_id ) {
          return true;
        }
      }

      return false;
    }
  }
?>
