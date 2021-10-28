<?php
error_reporting(E_ALL);
define('USER', 'root');
define('PASSWORD', 'password');
define('HOST', '127.0.0.1:3307 ');
define('DATABASE', 'users');
try{
    $connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD);
} catch(PDOException $e){
    exit("Error:" . $e->getMessage());
}

?>