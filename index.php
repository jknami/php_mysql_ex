<?php 
require_once('lib/list.php');
?>

<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$article['title'] ?></title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?= $list ?>
    </ol>
    <?= $create_link ?>
    <p><?= $article['title'] ?></p>
    <p><?= $article['description'] ?></p>
    <p></p><?= $article['name'] ?>
</body>
</html>