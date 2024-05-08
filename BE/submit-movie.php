<?php
require_once("common/connect.php");

if (isset($_POST["movie"])) {
    $movie = $_POST["movie"];
    $description = $_POST["description"];
    $is_available = $_POST["is_available"];
    $insert = $db->query("INSERT INTO table_movies (MOVIE, DESCRIPTION, IS_AVAILABLE) VALUES ('$movie', '$description', '$is_available')");

    $row= $insert->fetch();
}
?>