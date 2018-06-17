<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Setup;

  use OSC\Core\HTML;
  use OSC\Core\OSCOM;

  abstract class ApplicationAbstract extends \OSC\Core\ApplicationAbstract {
    public function __construct() {
      $this->initialize();

      if ( isset($_GET['action']) && !empty($_GET['action']) ) {
        $action = HTML::sanitize(basename($_GET['action']));

        if ( class_exists('OSC\\Core\\Site\\' . OSCOM::getSite() . '\\Application\\' . OSCOM::getSiteApplication() . '\\Action\\' . $action) ) {
          call_user_func(array('OSC\\Core\\Site\\' . OSCOM::getSite() . '\\Application\\' . OSCOM::getSiteApplication() . '\\Action\\' . $action, 'execute'), $this);
        }
      }
    }
  }
?>
