<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Languages\Action\InsertDefinition;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\Languages\Languages;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $data = array('group' => $_POST['defgroup'],
                    'key' => $_POST['key'],
                    'values' => $_POST['value']);

      if ( Languages::insertDefinition($data) ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
      }

      OSCOM::redirect(OSCOM::getLink(null, null, 'id=' . $_GET['id'] . (isset($_GET['group']) ? '&group=' . $_GET['group'] : '')));
    }
  }
?>
