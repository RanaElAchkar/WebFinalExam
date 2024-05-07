<?php
session_start();
require_once("common/connect.php");
require_once("Post.php");

function listMovies(){
$db= dbconnect();
$movies = [];
$query = "SELECT * FROM table_movies";
$result = $db->query($query);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $movies[] = new Movie($row['MOVIE'], $row['DESCRIPTION'], $row['IS_AVAILABLE']);
    }
<<<<<<< HEAD
    return $movies;
}
?>
=======
    ?>
    <?php foreach ($posts as $post): ?>
    
    <?php endforeach; ?>
>>>>>>> c0330135b5ae7dedf404605ef9d7733ca273e9ae
