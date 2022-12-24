<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "transgo_new";

// try {
//     //create PDO connection 
//     $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
// } catch (PDOException $e) {
//     //show error
//     die("Terjadi masalah: " . $e->getMessage());
// }

$db = mysqli_connect('localhost', 'root', '', 'transgo_new');

if(mysqli_connect_errno()) {
    echo 'Connection failed';
    mysqli_connect_error();
    exit();
}