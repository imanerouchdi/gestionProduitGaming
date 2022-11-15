<?php
include 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv-> load();

$nameserver=$_ENV['DB_SERVER'];
$username =$_ENV['DB_USER'];
$password=$_ENV['DB_PASSWORD'];
$database=$_ENV['DB_NAMEDATA'];
$conn=mysqli_connect($nameserver,$username,$password,$database);


?>