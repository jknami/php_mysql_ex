<?php 
require_once('lib/list.php');
?>

<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?= $list ?>
    </ol>
    <p>아래에 세로운 글을 작성하시오</p>
    <form action="process_create.php" method="post">
        <p><input type="text" name="title" placeholder="제목을 입력하시오"></p>
        <p><textarea name="description" placeholder="내용을 입력하시오"></textarea></p>
        <p><?= $author_select ?></p>
        <p><input type="submit"></p>
    </form>
   





</body>
</html>