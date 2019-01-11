<?php
require __DIR__ . '/autoload.php';

/*$data = \App\Models\User::findAll(); //Вызов статического метода findAll() описанного в классе Model из которого наследуются другие классы*/

$article = new \App\Models\Article();

$article->title = 'Заголовок новости';
$article->content = 'Опять что то произошло';
$article->insert();


?>