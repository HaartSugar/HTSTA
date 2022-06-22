<?php 
session_start();

$host = "localhost";
$user = "root";
$psw = "";
$portNo = 3306;
$dbName = "lishaopeng";
$connection = new mysqli($host, $user, $psw, $dbName, $portNo);

?>