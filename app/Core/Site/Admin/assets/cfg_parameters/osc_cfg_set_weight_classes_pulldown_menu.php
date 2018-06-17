<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  use OSC\Core\HTML;
  use OSC\Core\Site\Shop\Weight;

  function osc_cfg_set_weight_classes_pulldown_menu($default, $key = null) {
    $name = (empty($key)) ? 'configuration_value' : 'configuration[' . $key . ']';

    $weight_class_array = array();

    foreach ( Weight::getClasses() as $class ) {
      $weight_class_array[] = array('id' => $class['id'],
                                    'text' => $class['title']);
    }

    return HTML::selectMenu($name, $weight_class_array, $default);
  }
?>
