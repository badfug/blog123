<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include "include/db.php";
	include "include/posts.php";
	?>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="pages/add_post.php">Добавить пост</a></li>
    </ul>
	<?php

	foreach ($posts as $text);{
		include "include/post.php";
	}
	?>


</body>
</html>