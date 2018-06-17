<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop;

  use OSC\Core\Registry;

  abstract class ApplicationAbstract extends \OSC\Core\ApplicationAbstract {
    public function __construct() {
      $this->ignoreAction(Registry::get('Session')->getName());

      parent::__construct();
    }
  }
?>
