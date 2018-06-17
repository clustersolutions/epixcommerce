<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\Template\Value\total_shortcuts;

  use OSC\Core\Access;
  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      $total_shortcuts = 0;

      if ( isset($_SESSION[OSCOM::getSite()]['id']) && Access::hasShortcut() ) {
        $total_shortcuts = count(Access::getShortcuts());
      }

      return $total_shortcuts;
    }
  }
?>
