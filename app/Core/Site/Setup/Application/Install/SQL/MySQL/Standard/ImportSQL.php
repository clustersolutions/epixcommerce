<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Setup\Application\Install\SQL\MySQL\Standard;

  use OSC\Core\OSCOM;
  use OSC\Core\Registry;

  class ImportSQL {
    public static function execute($data) {
      $OSCOM_PDO = Registry::get('PDO');

      $sql_file = OSCOM::BASE_DIRECTORY . 'Core/Site/Setup/sql/oscommerce.sql';

      return $OSCOM_PDO->importSQL($sql_file, $data['table_prefix']);
    }
  }
?>
