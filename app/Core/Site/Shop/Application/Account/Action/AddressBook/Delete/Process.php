<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Account\Action\AddressBook\Delete;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;
  use OSC\Core\Site\Shop\AddressBook;

  class Process {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_MessageStack = Registry::get('MessageStack');

      if ( AddressBook::deleteEntry($_GET['Delete']) ) {
        $OSCOM_MessageStack->add('AddressBook', OSCOM::getDef('success_address_book_entry_deleted'), 'success');
      }

      OSCOM::redirect(OSCOM::getLink(null, null, 'AddressBook', 'SSL'));
    }
  }
?>
