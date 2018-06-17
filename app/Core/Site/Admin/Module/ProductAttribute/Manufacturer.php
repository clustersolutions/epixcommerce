<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\ProductAttribute;

  use OSC\Core\HTML;
  use OSC\Core\OSCOM;
  use OSC\Core\Registry;

/**
 * @since v3.0.3
 */

  class Manufacturer extends \OSC\Core\Site\Admin\ProductAttributeModuleAbstract {
    public function getInputField($value) {
      $OSCOM_PDO = Registry::get('PDO');

      $array = array(array('id' => '',
                           'text' => OSCOM::getDef('none')));

      $Qm = $OSCOM_PDO->query('select manufacturers_id, manufacturers_name from :table_manufacturers order by manufacturers_name');

      while ( $Qm->fetch() ) {
        $array[] = array('id' => $Qm->valueInt('manufacturers_id'),
                         'text' => $Qm->value('manufacturers_name'));
      }

      return HTML::selectMenu('attributes[' . self::getID() . ']', $array, $value);
    }
  }
?>
