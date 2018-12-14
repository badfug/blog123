<?php
    header("Location: ..index.php")
	include "include/db.php";
    include "include/posts.php";
    $id = $_GET[id];
    del_posts($con, $id);
    exit;
	?>