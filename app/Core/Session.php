<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2014 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core;

  use OSC\Core\OSCOM;

/**
 * The Session class initializes the session storage handler
 */

  class Session {

/**
 * Loads the session storage handler
 *
 * @param string $name The name of the session
 * @access public
 */

    public static function load($name = null) {
      $class_name = 'OSC\\Core\\Session\\' . OSCOM::getConfig('store_sessions');

      if ( !class_exists($class_name) ) {
        trigger_error('Session Handler \'' . $class_name . '\' does not exist, using default \'OSC\\Core\\Session\\File\'', E_USER_ERROR);

        $class_name = 'OSC\\Core\\Session\\File';
      }

      $obj = new $class_name();

      if ( !isset($name) ) {
        $name = 'sid';
      }

      $obj->setName($name);
      $obj->setLifeTime(ini_get('session.gc_maxlifetime'));

      return $obj;
    }
  }
?>
