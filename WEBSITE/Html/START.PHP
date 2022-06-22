<?php 
session_start();

if(!isset($_SESSION['userLoggedIn'])){
    $_SESSION['userLoggedIn'] = false;
}

if(isset($_POST["LOGOUT"])){
    session_unset();
    session_destroy();
    header('Location: Home.php');
    die();
}

$host = "localhost";
$user = "root";
$psw = "";
$portNo = 3306;
$dbName = "lishaopeng";
$connection = new mysqli($host, $user, $psw, $dbName, $portNo);

?>