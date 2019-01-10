<?php

namespace App;



abstract class Model
{

    public const TABLE = ''; //Статическое переменная
    public $id;

    public static function findAll()
    { //статический метод - вызываемый без создания экземпляра класса, т.е. метод без $this
        $db = new Db();



        $sql = 'SELECT * FROM ' . static::TABLE; // Забираем константу из класса который наследует этот

        return $db->query(
            $sql,
            [],
            static::class
        );
    }
}