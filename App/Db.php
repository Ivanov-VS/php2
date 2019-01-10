<?php
/**
 * Created by PhpStorm.
 * User: VS
 * Date: 10.01.2019
 * Time: 10:15
 */

namespace App;


class Db
{
    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $dbh = new \PDO (
            'mysql:host='.$config['host'].';dbname='.$config['dbname'],
            $config['user'],
            $config['password']
        );
    }
}