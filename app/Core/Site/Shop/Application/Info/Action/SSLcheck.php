<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Application\Info\Action;

  use OSC\Core\ApplicationAbstract;
  use OSC\Core\Registry;
  use OSC\Core\OSCOM;

  class SSLcheck {
    public static function execute(ApplicationAbstract $application) {
      $OSCOM_Service = Registry::get('Service');
      $OSCOM_Breadcrumb = Registry::get('Breadcrumb');

      $application->setPageTitle(OSCOM::getDef('info_ssl_check_heading'));
      $application->setPageContent('ssl_check.php');

      if ( $OSCOM_Service->isStarted('Breadcrumb') ) {
        $OSCOM_Breadcrumb->add(OSCOM::getDef('breadcrumb_ssl_check'), OSCOM::getLink(null, null, 'SSLcheck'));
      }
    }
  }
?>
