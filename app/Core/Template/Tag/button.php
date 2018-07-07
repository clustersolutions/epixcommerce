<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Template\Tag;

  use OSC\Core\HTML;
  use OSC\Core\OSCOM;

  class button extends \OSC\Core\Template\TagAbstract {
    static protected $_parse_result = false;

    static public function execute($string) {
      $params = explode('|', $string, 2);

      $data = array('icon' => $params[0]);

      if ( isset($params[1]) ) {
        $data['title'] = OSCOM::getDef($params[1]);
      }

      return HTML::button($data);
    }
  }
?>
