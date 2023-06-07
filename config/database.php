<?php

define('DB_HOST','localhost');
define('DB_USER','taikhoan916');
define('DB_PASS','matkhau916');
define('DB_NAME','php_dev');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die('Connection Error'.$conn->connect_error);
}



?>