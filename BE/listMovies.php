<?php
session_start();
require_once("common/connect.php");
require_once("Post.php");
$movies = [];
$query = "SELECT * FROM table_movies";
$result = $db->query($query);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $movies[] = new $Post($row['MOVIE'], $row['DESCRIPTION'], $row['IS_AVAILABLE']);
    }
    ?>
    <?php foreach ($posts as $post): ?>
    
    <?php endforeach; ?>