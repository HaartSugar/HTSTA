<?php 
include_once("../START.PHP");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?=time(); ?>'>
    <script src='main.js'></script>
</head>
<body>
<?php
if (!$_SESSION['admin']) {
    header('Location: Home.php');
    die();
}
include_once("../navbar.php");
navbar(["Home","About","Contact","Products","shoppingCart","Resister","Login",],["Home","About","Contact","Products","shoppingCart","Resister","Login"],"langEn",10);

?>
<div>
    <br>
    <br>
    <br>
    
<h1>

This its admin Stuff.....
</h1>
</div>   
</body>
</html>