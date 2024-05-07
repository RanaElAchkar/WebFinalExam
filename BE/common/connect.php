<?php
$dbhost= "localhost";
$dbname= "moviebuff";
$dbuser= "root";
$dbpass="";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);		
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
} ?>