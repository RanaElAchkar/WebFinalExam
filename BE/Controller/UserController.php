<?php 
session_start();
require_once("../common/connect.php");
require_once("../Model/UserModel.php");
if (isset($_POST["action"])){
    switch ($_POST["action"]){
        case "LOGIN":
           $un=VarExist($_POST["username"]);
           $pass=VarExist($_POST["pass"]);
           LogIn($un,$pass);
        break;
        case "SIGNUP":
            $un=VarExist($_POST["username"]);
            $fn=VarExist($_POST["firstname"]);
            $ln=VarExist($_POST["lastname"]);
            $pass=VarExist($_POST["password"]);
            SignUp($un,$fn,$ln,$pass);
        break;
    }
}else{
    header("location:../../../CMS/CMSpages/index.php");
}

?>