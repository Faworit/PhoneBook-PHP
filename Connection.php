<?php
$host = 'localhost';
$user = 'root';
$password = 'admin';
$name = 'phone';
$port = '3307';

$connection = mysqli_connect($host, $user, $password, $name, $port);

if($connection == false){
    echo 'не удалось подключитсья';
    echo mysqli_connect_error();
    die();
}
