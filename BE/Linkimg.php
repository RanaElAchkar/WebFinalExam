<?php
require_once("common/connect.php");

function ToggleAvailability($movie_id, $new_status) {
    $db = dbconnect();

    $update_query = "UPDATE movies SET `is_available` = $new_status WHERE id = $movie_id";
    $db->query($update_query);
}

if (isset($_GET["id"]) && isset($_GET["new_status"])) {
    $movie_id = intval($_GET["id"]); 
    $new_status = intval($_GET["new_status"]); 

    ToggleAvailability($movie_id, $new_status);
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>
