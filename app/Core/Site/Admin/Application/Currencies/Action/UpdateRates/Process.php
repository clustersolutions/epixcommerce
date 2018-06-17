<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\Currencies\Action\UpdateRates;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Site\Admin\Application\Currencies\Currencies;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      if ( isset($_POST['service']) && (($_POST['service'] == 'oanda') || ($_POST['service'] == 'xe')) ) {
        $results = Currencies::updateRates($_POST['service']);

        foreach ( $results[0] as $result ) {
          Registry::get('MessageStack')->add(null, sprintf(OSCOM::getDef('ms_error_invalid_currency'), $result['title'], $result['code']), 'error');
        }

        foreach ( $results[1] as $result ) {
          Registry::get('MessageStack')->add(null, sprintf(OSCOM::getDef('ms_success_currency_updated'), $result['title'], $result['code']), 'success');
        }
      }

      OSCOM::redirect(OSCOM::getLink());
    }
  }
?>
