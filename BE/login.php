<?php
require_once("common/connect.php");   

function loginPocess(){
$db= dbconnect();
global $db;
if (isset($_POST['username']) && (isset($_POST['password']))){
   
    $username= $_POST["username"];
    $stmt = $db->query("SELECT password FROM users WHERE username = '$username'");
    $record = $stmt->fetch();
        if ($record>0 && password_verify($_POST['password'], $record['password'])) {
            $_SESSION['username'] = $username;
            header("Location:../CMS/shop.php");
        }
        else{
            header("Location: ../CMS/index.html");
        }
}
}
?>