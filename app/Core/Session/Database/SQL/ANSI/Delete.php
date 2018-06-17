<?php
/**
 * osCommerce Online Merchant
 *
 * @copyright (c) 2016 osCommerce; https://www.oscommerce.com
 * @license BSD; https://www.oscommerce.com/bsdlicense.txt
 */

namespace OSC\Core\Session\Database\SQL\ANSI;

use OSC\Core\Registry;

class Delete
{
    public static function execute(array $data): bool
    {
        $OSCOM_PDO = Registry::get('PDO');

        $Qsession = $OSCOM_PDO->prepare('delete from :table_sessions where id = :id');
        $Qsession->bindValue(':id', $data['id']);
        $Qsession->execute();

        return $Qsession->isError() === false;
    }
}
