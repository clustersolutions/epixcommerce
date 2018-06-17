<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\Template\Value\html_lang;

  use OSC\Core\OSCOM;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      return OSCOM::getDef('html_lang_code'); // HPDL A better solution is to define the ISO 639-1 value at the language level
    }
  }
?>
