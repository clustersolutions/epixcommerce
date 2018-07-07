<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 *
 * laravel-oscommerce
 * @copyright Copyright (c) 2018 Cluster Solutions; https://clustersolutions.net
 * @license MIT License; https://clustersolutions.net/mit-license/
 *
 */

  namespace OSC\Core\Site\Admin\Module\Template\Value\csrf_token;
  use Illuminate\Support\Facades\Session;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      return Session::token();
    }
  }
?>
