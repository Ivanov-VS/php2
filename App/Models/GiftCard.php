<?php

namespace App\Models;


use App\Model;

class GiftCard extends Model implements HasWeight, HasPrice
{
    public const TABLE = 'cards'; //Статическое переменная

    public function getModelName() // Реализация статического наследованного метода
    {
        return 'Скидочная карта'
    }

    public function getPrice() // Реализация метода из имплиментированного интерфейса
    {
        return 43;
    }

    public function getWeight()
    {
        return 100;
    }
}