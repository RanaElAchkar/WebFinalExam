<?php 
session_start();
require_once("../common/connect.php");
require_once("../Model/MovieModel.php");
if (isset($_POST["action"])){
            $id=VarExist($_POST["id"]);
            $movie=VarExist($_POST["name"]);
            $desc=VarExist($_POST["desc"]);
            AddMovie($id, $movie, $desc);
}else{
    header("location:../../../CMS/CMSpages/AddItem.php");
}
?>