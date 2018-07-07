<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright (c) 2017 osCommerce; https://www.oscommerce.com
 * @license BSD; https://www.oscommerce.com/license/bsd.txt
 */

namespace OSC\Core\Template\Tag;

class json extends \OSC\Core\Template\TagAbstract
{
    public static function execute($string)
    {
        return json_encode($string);
    }
}
