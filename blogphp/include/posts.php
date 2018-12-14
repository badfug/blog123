<?php

function get_posts($link){
	$sql = "SELECT * FROM `posts`";

	$result = mysqli_query($link, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

$posts = get_posts($con);

function add_posts($link, $title, $tags, $text){
    $sql = "INSERT INTO `posts` (`title`, `tags`, `img`, `text`) VALUES ('".$title."', '".$tags."', '-', '".text."');";

    $result = mysqli_query($link, $sql);
}

function del_posts($link, $id){

	$sql = "DELETE FROM `posts` WHERE `posts`.`id` = ".$id";" ;

    $result = mysqli_query($link, $sql);
}


?>