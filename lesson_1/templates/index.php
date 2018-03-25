<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
<?php
foreach ($data as $article) { ?>
    <h1 style="text-align: center;"><?php echo $article->title; ?></h1>
    <p style="text-align: justify; text-indent: 15px;"><?php echo $article->content; ?></p>
    <a href="/lesson_1/home_work/article.php?id=<?php echo $article->id; ?>">читать далее</a>
    <?php
}
?>
</body>
</html>