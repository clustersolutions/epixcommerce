<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Administrators\Model;

  use OSC\Core\Site\Admin\Application\Administrators\Administrators;
  use OSC\Core\OSCOM;

  class setAccessLevels {
    public static function execute($id, $modules, $mode = Administrators::ACCESS_MODE_ADD) {
      $data = array('id' => $id,
                    'modules' => $modules,
                    'mode' => $mode);

      if ( in_array('0', $data['modules']) ) {
        $data['modules'] = array('*');
      }

      return OSCOM::callDB('Admin\Administrators\SavePermissions', $data);
    }
  }
?>
