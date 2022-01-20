<?php

$db_username='root';
$db_password ='';
$db_server_name ='localhost';
$db_name = 'orange-storedb';
try{
    $conn = new PDO("mysql:host=localhost;dbname=$db_name;",$db_username,$db_password) ;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
