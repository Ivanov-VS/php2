<?php
require __DIR__ . '/autoload.php';

$data = \App\Models\User::findAll(); //Вызов статического метода findAll() описанного в классе Model из которого наследуются другие классы



var_dump($data);
?>