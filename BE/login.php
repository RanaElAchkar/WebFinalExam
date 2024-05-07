<?php
require_once("common/connect.php");
    $un=$_POST["username"];      
    $pass=$_POST["password"];    

    $query="select ID from tbl_users where USERNAME='".$un."' AND PASSWORD=PASSWORD('".$pass."')";
    //echo $query;
    $stmt=$db->query($query);
    $rowCount=$stmt->rowCount();
    echo $rowCount;
    if ($rowCount>0){
        session_start();
        $_SESSION["username"]=$un;
        header("location:../pages/page1.php");
    }else{
        header("location:../login.php");
    }    
?>