<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Categories\Action\Delete;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\Categories\Categories;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

/**
 * @since v3.0.2
 */

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $parent_id = $application->getTree()->getParentID($_GET['id']);

      if ( Categories::delete($_GET['id']) ) {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
      } else {
        Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
      }

      OSCOM::redirect(OSCOM::getLink(null, null, 'cid=' . $parent_id));
    }
  }
?>
