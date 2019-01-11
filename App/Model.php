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

    public function insert()
    {
        $fields = get_object_vars($this); //получили все поля модели
        $cols = [];
        $data = [];
        foreach ($fields as $name => $value){
            if ('id' == $name){
                continue;
            }
            $cols[] = $name; //массив для sql запроса INSERT INTO news (title,content) VALUES (:title,:content )
            $data[':' . $name] = $value; //массив для передачи в execute

        $sql ='INSERT INTO ' .
            static::TABLE . ' (' .
            implode(',', $cols) .
            ') VALUES (' .
            implode(',', array_keys($data)) . ' )' ;
        $db = new Db();
        $db->execute($sql, $data);
    }
}


// self:: - раннее статическое связывание, self связано с именем класса в котором вызывается
// static:: - позднее статическое связывание, static связано через self в классе который наследует статический