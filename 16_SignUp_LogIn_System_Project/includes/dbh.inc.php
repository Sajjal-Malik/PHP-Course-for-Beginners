<?php 


$host = "localhost";
$dbname = "newdatabase";
$dbusername = "root";
$dbpassword = "unbreakable";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    die("Connection Failed: " . $e->getMessage());
}











?>