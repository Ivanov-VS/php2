<?php


namespace App\Models;


interface Orderable extends HasPrice, HasWeight // Множественное наследование
{
    public function getTitle();
}