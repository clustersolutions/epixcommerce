<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Configuration\Module\Template\Value\group_id;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      return ( isset($_GET['id']) ? $_GET['id'] : false );
    }
  }
?>
