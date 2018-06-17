<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ZoneGroups\Model;

  use OSC\Core\OSCOM;

  class getAllEntries {
    public static function execute($group_id) {
      $data = array('group_id' => $group_id);

      return OSCOM::callDB('Admin\ZoneGroups\EntryGetAll', $data);
    }
  }
?>
