<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2013 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Template\Tag;

  class url extends \OSC\Core\Template\TagAbstract {
    static protected $_parse_result = false;

    static public function execute($string) {
      $params = explode('|', $string, 2);

      return '<a href="' . $params[0] . '" target="_blank">' . (isset($params[1]) ? $params[1] : $params[0]) . '</a>';
    }
  }
?>
