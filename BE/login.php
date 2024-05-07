<?php
require_once("common/connect.php");
$un=$_POST["username"];      
$pass=$_POST["password"];    
$db= dbconnect();
    $query="select user_id from users where username='$un' AND password='$pass'";
    $stmt=$db->query($query);
    $rowCount=$stmt->rowCount();
    echo $rowCount;
    if ($rowCount>0){
        session_start();
        $_SESSION["username"]=$un;
        header("location:../CMS/shop.php");
    }else{
        header("location:../CMS/index.html");
    }   
?>