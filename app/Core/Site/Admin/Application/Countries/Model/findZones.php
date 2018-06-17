<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Countries\Model;

  use OSC\Core\OSCOM;

  class findZones {
    public static function execute($search, $country_id) {
      $data = array('keywords' => $search,
                    'country_id' => $country_id);

      return OSCOM::callDB('Admin\Countries\ZoneFind', $data);
    }
  }
?>
