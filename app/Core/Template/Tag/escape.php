<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Template\Tag;

  use OSC\Core\HTML;

  class escape extends \OSC\Core\Template\TagAbstract {
    static public function execute($string) {
      return HTML::outputProtected($string);
    }
  }
?>
