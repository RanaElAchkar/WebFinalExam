<?php
require_once("common/connect.php");

function login($username, $password, $db) {
    $pass = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT user_id FROM users WHERE USERNAME=:username AND PASSWORD=PASSWORD(:password)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();
    
    $rowCount = $stmt->rowCount();
    return $rowCount;
}

function redirect($rowCount) {
    if ($rowCount > 0) {
        session_start();
        $_SESSION["username"] = $_POST["username"];
        header("location:../pages/page1.php");
    } else {
        header("location:../login.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $un = $_POST["username"];      
    $pass = $_POST["password"];

    $rowCount = login($un, $pass, $db);
    redirect($rowCount);
}
?>
