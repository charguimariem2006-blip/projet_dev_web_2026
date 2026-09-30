<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $article=["imprimant","stylet","enceintes","tablette"];
    echo isset($article)?"<h1>liste des article</h1>":"aucun article a afficher";
    ?>
    <ul>
    <?php
    foreach ($article as $value){
    ?>
    <li><?= $value ?></li>
    <?php
    }
    ?>
    </ul>
</body>
</html>