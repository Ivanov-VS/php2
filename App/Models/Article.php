<?php

namespace App\Models;

use App\Model;


class Article extends Model
{

    public const TABLE = 'news'; //Статическое переменная


    public $title;
    public $content;

    public function getModelName()
    {
        return 'Новость';
    }

}