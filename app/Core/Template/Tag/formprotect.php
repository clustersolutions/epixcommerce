<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2014 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Template\Tag;

  use OSC\Core\HTML;
  use OSC\Core\OSCOM;
  use OSC\Core\Registry;

/**
 * @since v3.0.3
 */

  class formprotect extends \OSC\Core\Template\TagAbstract {
    static protected $_parse_result = false;

    static public function execute($string) {
      $OSCOM_Template = Registry::get('Template');

      if ( !$OSCOM_Template->valueExists($string) ) {
        if ( class_exists('osCommerce\\OM\\Core\\Site\\' . OSCOM::getSite() . '\\Application\\' . OSCOM::getSiteApplication() . '\\Module\\Template\\Value\\' . $string . '\\Controller') && is_subclass_of('osCommerce\\OM\\Core\\Site\\' . OSCOM::getSite() . '\\Application\\' . OSCOM::getSiteApplication() . '\\Module\\Template\\Value\\' . $string . '\\Controller', 'osCommerce\\OM\\Core\\Template\\ValueAbstract') ) {
          call_user_func(array('osCommerce\\OM\\Core\\Site\\' . OSCOM::getSite() . '\\Application\\' . OSCOM::getSiteApplication() . '\\Module\\Template\\Value\\' . $string . '\\Controller', 'initialize'));
        } elseif ( class_exists('osCommerce\\OM\\Core\\Site\\' . OSCOM::getSite() . '\\Module\\Template\\Value\\' . $string . '\\Controller') && is_subclass_of('osCommerce\\OM\\Core\\Site\\' . OSCOM::getSite() . '\\Module\\Template\\Value\\' . $string . '\\Controller', 'osCommerce\\OM\\Core\\Template\\ValueAbstract') ) {
          call_user_func(array('osCommerce\\OM\\Core\\Site\\' . OSCOM::getSite() . '\\Module\\Template\\Value\\' . $string . '\\Controller', 'initialize'));
        }
      }

      $result = '';

      if ( $OSCOM_Template->valueExists($string) ) {
        $result = HTML::hiddenField($string, md5($OSCOM_Template->getValue($string)));
      }

      return $result;
    }
  }
?>
