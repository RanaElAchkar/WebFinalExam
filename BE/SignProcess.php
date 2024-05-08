<?php
require_once("common/connect.php");
$db= dbconnect();
$username= $_POST["username"];
$password= $_POST["password"];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];

    $stmt = $db->query("SELECT username FROM users WHERE username = '$username'");
    $record = $stmt->fetch();
    if ($record) {
        echo "Username already exists";
        header("Location: ../CMS/SignUp.html");
        exit();
      }
    else {
        $fn= $_POST["firstname"];
        $ln= $_POST["lastname"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO users (username, firstname, lastname, password) VALUES ( '$username','$fn', '$ln',  '$hashedPassword')";
        $stamt= $db->query($insertQuery);
        session_start();
        $_SESSION["username"]= $username;
        header("Location: ../CMS/index.html");
    }
}
?>