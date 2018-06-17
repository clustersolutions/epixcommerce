<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\Service;

  use OSC\Core\Registry;
  use OSC\Core\DateTime;

  class SimpleCounter implements \OSC\Core\Site\Shop\ServiceInterface {
    public static function start() {
      $OSCOM_PDO = Registry::get('PDO');

      $Qcounter = $OSCOM_PDO->query('select startdate, counter from :table_counter');
      $Qcounter->execute();

      $result = $Qcounter->fetchAll();

      if ( count($result) > 0 ) {
        $OSCOM_PDO->exec('update :table_counter set counter = counter+1');
      } else {
        $Qcounterupdate = $OSCOM_PDO->prepare('insert into :table_counter (startdate, counter) values (:start_date, 1)');
        $Qcounterupdate->bindValue(':start_date', DateTime::getNow());
        $Qcounterupdate->execute();
      }

      return true;
    }

    public static function stop() {
      return true;
    }
  }
?>
