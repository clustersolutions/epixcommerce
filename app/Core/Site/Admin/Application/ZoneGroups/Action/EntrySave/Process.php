<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\ZoneGroups\Action\EntrySave;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\ZoneGroups\ZoneGroups;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $data = array('group_id' => $_GET['id'],
                    'country_id' => $_POST['zone_country_id'],
                    'zone_id' => $_POST['zone_id']);

      if ( ZoneGroups::saveEntry((isset($_GET['zID']) && is_numeric($_GET['zID']) ? $_GET['zID'] : null), $data) ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
      }

      OSCOM::redirect(OSCOM::getLink(null, null, 'id=' . $_GET['id']));
    }
  }
?>
