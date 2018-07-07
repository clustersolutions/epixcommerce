<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright (c) 2015 osCommerce; http://www.oscommerce.com
 * @license BSD; http://www.oscommerce.com/bsdlicense.txt
 */

namespace OSC\Core\Template\Tag;

use OSC\Core\HTML;

class value extends \OSC\Core\Template\TagAbstract
{
    static protected $_parse_result = false;

    static public function execute($string, ...$args): string
    {
        $value = raw::execute($string, ...$args);

        $result = HTML::outputProtected($value);

        return $result;
    }
}
