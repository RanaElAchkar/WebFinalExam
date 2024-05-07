<?php
function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../index.html");
        exit; // Add exit to stop script execution after redirection
    }
}

function dbconnect(){
<<<<<<< HEAD
$dbhost= "localhost";
$dbname= "moviebuff";
$dbuser= "root";
$dbpass="";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
    return $db;	
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
} 
=======
    $dbhost= "localhost";
    $dbname= "moviebuff";
    $dbuser= "root";
    $dbpass="";
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);		
        return $db; 
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    } 
>>>>>>> c0330135b5ae7dedf404605ef9d7733ca273e9ae
}
?>
