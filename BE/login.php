<?php
require_once("common/connect.php");
<<<<<<< HEAD

=======
>>>>>>> 5a40ee8b4f6cbc17901c555b08fe66ea12a12173
    $un=$_POST["username"];      
    $pass=$_POST["password"];    

    $query="select user_id from users where USERNAME='".$un."' AND PASSWORD=PASSWORD('".$pass."')";
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