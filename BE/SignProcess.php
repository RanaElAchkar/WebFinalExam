<?php
require_once("common/connect.php");
$email= $_POST["email"];
$password= $_POST["password"];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];

    $stmt = $db->query("SELECT email FROM users WHERE email = '$email'");
    $record = $stmt->fetch();
    if ($record) {
        echo "Username already exists";
        header("Location: ../SignUp.html");
        exit();
      }
    else {
        $fn= $_POST["firstname"];
        $ln= $_POST["lastname"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fn', '$ln', '$email', '$hashedPassword')";
        $stamt= $db->query($insertQuery);
        session_start();
        $_SESSION["email"]= $email;
        $_SESSION["password"]= $hashedPassword;
        header("Location: ../Login.html");
    }
}
?>