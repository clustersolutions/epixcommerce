<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Application\PaymentModules\Model;

  use OSC\Core\Registry;
  use OSC\Core\Site\Admin\Application\PaymentModules\PaymentModules;
  use OSC\Core\DirectoryListing;
  use OSC\Core\OSCOM;

  class getUninstalled {
    public static function execute() {
      $OSCOM_Language = Registry::get('Language');

      $installed_modules = PaymentModules::getInstalled();
      $installed = array();

      foreach ( $installed_modules['entries'] as $module ) {
        $installed[] = $module['code'];
      }

      $result = array('entries' => array());

      $DLpm = new DirectoryListing(OSCOM::BASE_DIRECTORY . 'Core/Site/Admin/Module/Payment');
      $DLpm->setIncludeDirectories(false);

      foreach ( $DLpm->getFiles() as $file ) {
        $module = substr($file['name'], 0, strrpos($file['name'], '.'));

        if ( !in_array($module, $installed) ) {
          $class = 'OSC\\Core\\Site\\Admin\\Module\\Payment\\' . $module;

          $OSCOM_Language->injectDefinitions('modules/payment/' . $module . '.xml');

          $OSCOM_PM = new $class();

          $result['entries'][] = array('code' => $OSCOM_PM->getCode(),
                                       'title' => $OSCOM_PM->getTitle(),
                                       'sort_order' => $OSCOM_PM->getSortOrder(),
                                       'status' => $OSCOM_PM->isEnabled());
        }
      }

      $result['total'] = count($result['entries']);

      return $result;
    }
  }
?>
