<!doctype html>
<html lang="en">
<head>
    <?php
        include "../include/db.php";
        include "../include/posts.php";

        $data = $_POST;
        if (isset($data['add'])){
            add_posts($con, $data['title'], $data['tags'], $data['text']);
        }

    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="../index.php">Главная</a></li>
        <li><a href="pages/add_post.php">Добавить пост</a></li>
    </ul>
    <form action="add_post.php" method="POST">
        <div>
            Название:
            <input type="text" name="title">
        </div>
        <div>
            Тэги:
            <input type="text" name="tags">
        </div>
        <div>
            Текст:
            <input type="text" name="test">
        </div>
        <button type="submit" name="add">Добавить</button>
    </form>
</body>
</html>