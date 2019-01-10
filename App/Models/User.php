<?php

namespace App\Models;

use App\Model;


class User extends Model
{

    public const TABLE = 'users'; //Статическое переменная


    public $email;
    public $name;

}