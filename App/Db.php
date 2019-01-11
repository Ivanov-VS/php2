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
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO (
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'],
            $config['password']
        );
    }

    public function query($sql, $data = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class); //сразу из базы в массив объектов заданного класса

       /*
       $data = $sth->fetchAll();
       //обход получаемой даты из fetchAll() без параметров
       $ret = [];

        foreach ($data as $row) {
            $item = new $class;
            foreach ($row as $key => $val) {
                if (is_numeric($key)) {
                      continue;
                }
                $item->$key = $val;
            }
            $ret[] = $item;
        }
        return $ret;*/
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }
}