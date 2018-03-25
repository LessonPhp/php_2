<?php
require __DIR__ . '/autoload.php';


if(isset($_GET['id'])) {
    if(!empty($_GET['id'])) {
        $id = (int)$_GET['id'];
    } else {
        header('Location: /lesson_1/home_work/index.php');
        die;
    }
}


$article = \App\Models\Article::findByIdArticle($id);

include __DIR__ . '/templates/article.php';