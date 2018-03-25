<?php

require __DIR__ . '/autoload.php';


$data = \App\Models\Article::findAllNews();

//var_dump($data);


include __DIR__ . '/templates/index.php';