<meta charset="utf-8">
<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'blog0');

if(mysqli_connect_errno()){
    echo "Ошибка подключения к базе данных :".mysqli_connect_error();
    exit();
}


?>
