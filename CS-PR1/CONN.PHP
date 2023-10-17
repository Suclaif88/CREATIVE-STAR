<?php 

$conex = "localhost";
$username = "root";
$password = "";
$database = "creative star";

try{
    $conn = new PDO("mysql:host=$conex;dbname=$database;",$username,$password);
} catch(PDOException $e) {

    die('Connected failed: '.$e->getMessage());

}

?>