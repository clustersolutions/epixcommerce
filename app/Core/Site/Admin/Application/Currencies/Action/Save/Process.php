<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Currencies\Action\Save;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\Currencies\Currencies;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $data = array('id' => (isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : null),
                    'title' => $_POST['title'],
                    'code' => $_POST['code'],
                    'symbol_left' => $_POST['symbol_left'],
                    'symbol_right' => $_POST['symbol_right'],
                    'decimal_places' => $_POST['decimal_places'],
                    'value' => $_POST['value'],
                    'set_default' => ((isset($_POST['default']) && ($_POST['default'] == 'on')) || (isset($_POST['is_default']) && ($_POST['is_default'] == 'true') && ($_POST['code'] != DEFAULT_CURRENCY))));

      if ( Currencies::save($data) ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
      }

      OSCOM::redirect(OSCOM::getLink());
    }
  }
?>
