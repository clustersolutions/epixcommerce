<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Shop\Module\Service;

  use OSC\Core\Registry;
  use OSC\Core\Site\Shop\Customer;
  use OSC\Core\Site\Shop\Tax;
  use OSC\Core\Site\Shop\Weight;
  use OSC\Core\Site\Shop\ShoppingCart;
  use OSC\Core\Site\Shop\NavigationHistory;
  use OSC\Core\Site\Shop\Image;

  class Core implements \OSC\Core\Site\Shop\ServiceInterface {
    public static function start() {
      Registry::set('Customer', new Customer());

      Registry::set('Tax', new Tax());

      Registry::set('Weight', new Weight());

      Registry::set('ShoppingCart', new ShoppingCart());
      Registry::get('ShoppingCart')->refresh();

      Registry::set('NavigationHistory', new NavigationHistory(true));

      Registry::set('Image', new Image());

      return true;
    }

    public static function stop() {
      return true;
    }
  }
?>
