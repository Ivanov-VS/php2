<?php

namespace App;



abstract class Model
{

    public const TABLE = ''; //Статическое переменная
    public $id;

    abstract  public function getModelName();
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


// self:: - раннее статическое связывание, self связано с именем класса в котором вызывается
// static:: - позднее статическое связывание, static связано через self в классе который наследует статический