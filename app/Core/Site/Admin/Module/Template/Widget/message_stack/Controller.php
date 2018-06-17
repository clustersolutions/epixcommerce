<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\Template\Widget\message_stack;

  use OSC\Core\Registry;

  class Controller extends \OSC\Core\Template\WidgetAbstract {
    static public function execute($group = null) {
      $OSCOM_MessageStack = Registry::get('MessageStack');

      if ( $OSCOM_MessageStack->exists($group) ) {
        return $OSCOM_MessageStack->get($group);
      }
    }
  }
?>
