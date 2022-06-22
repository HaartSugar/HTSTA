<?php
include_once("../START.PHP");
if($_SESSION['userLoggedIn'] == false){
    print "<script>alert('You are not logged in')</script>";
    print '<script>window.location.href = "Login.php";</script>';
}
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
    
    include_once("../navbar.php");
navbar(["Home","About","Contact","Products","shoppingCart","Resister","Login"],["Home","About","Contact","Products","shoppingCart","Resister","Login"],"langEn",1);
    ?>

    <div class="content-area">
<?php
//print_r( $_SESSION["shoppingCart"]);
$totalOrder = 0;

foreach($_SESSION["shoppingCart"] as $IDproduct => $quantity){
    $sqlStatement2 = $connection->prepare("SELECT * FROM Products natural join Descriptions where languagesID=1 AND ProductsID=?");
    $sqlStatement2->bind_param("s", $IDproduct);
    $sqlStatement2->execute();
    $result2 = $sqlStatement2->get_result();

    $row = $result2->fetch_assoc();

    $totalOrder = $totalOrder + ($row["ProductsPrice"] * $quantity);
    ?>
<div> 
    <div><?= $row["ProductsName"] ?></div>
    <div><?= $quantity ?></div>
</div>
    <?php
}
?>
<div><?= $totalOrder ?></div>
</div>
</body>
</html>