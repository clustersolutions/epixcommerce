<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\TaxClasses\Model;

  use OSC\Core\OSCOM;

  class getNumberOfTaxRates {
    public static function execute($id) {
      $data = array('id' => $id);

      $result = OSCOM::callDB('Admin\TaxClasses\Get', $data);

      return $result['total_tax_rates'];
    }
  }
?>
