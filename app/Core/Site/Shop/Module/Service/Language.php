<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\Service;

  use OSC\Core\Registry;
  use OSC\Core\OSCOM;
  use OSC\Core\Language as LanguageClass;

  class Language implements \OSC\Core\Site\Shop\ServiceInterface {
    public static function start() {
      Registry::set('Language', new LanguageClass());

      $OSCOM_Language = Registry::get('Language');

      if ( isset($_GET['language']) && !empty($_GET['language']) ) {
        $OSCOM_Language->set($_GET['language']);
      }

      $OSCOM_Language->load('general');
      $OSCOM_Language->load('modules-boxes');
      $OSCOM_Language->load('modules-content');

      $OSCOM_Language->load(OSCOM::getSiteApplication());

      header('Content-Type: text/html; charset=' . $OSCOM_Language->getCharacterSet());

      return true;
    }

    public static function stop() {
      return true;
    }
  }
?>
