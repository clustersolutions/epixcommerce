<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2013 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Template\Tag;

  class b extends \OSC\Core\Template\TagAbstract {
    static public function execute($string) {
      return '<strong>' . $string . '</strong>';
    }
  }
?>
