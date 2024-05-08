<?php
<<<<<<< HEAD
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
=======
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
>>>>>>> 9baca677e38d2342598dfa58c7ba321286d59bf1
