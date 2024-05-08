<?php
 function SignUp($un,$fn,$ln,$pass){
   $db= dbconnect();
   global $db;
   $stmt = $db->query("SELECT username FROM users WHERE username = '$username'");
   $record = $stmt->fetch();
    if ($record) {
        echo "Username already exists";
        header("Location: ../CMS/CMSpages/SignUp.php");
        exit();
      }
    else {
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO users (username, firstname, lastname, password) VALUES ( '$username','$fn', '$ln',  '$hashedPassword')";
        $stamt= $db->query($insertQuery);
        header("Location: ../CMS/CMSpages/index.php");
    }
}

function LogIn($un,$pass){
    $db= dbconnect();
    global $db;
    $stmt = $db->query("SELECT ID FROM users WHERE username = '$un'");
    if ($stmt->rowCount()>0){
        $_SESSION["username"]=$un;
        header("location:../CMS/CMSpages/viewlist.php");
    }else{
        echo "Wrong Username or Password!";
    }

 }

?>