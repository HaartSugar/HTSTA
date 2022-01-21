<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            background-color: burlywood;
        }
        table,th,td,tr{
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    $grade=55.95;
    $integerGrade=(int)$grade;
    print($grade);
    print($integerGrade);
    ?>

<?php
    $ARR = [4,5,6];
    $x=10;
    $y=20;
    array_shift($ARR);
    array_pop($ARR);
    array_unshift($ARR,$x,$y);
    print_r($ARR);
    ?>


<p><------------------------------------------------------------------------HAHA---------------------------------------------------------------------------></p>
<H1>15.10.2021</H1>

<?php
    $age = ["Dacia","APPLE","BMW"];
    $age["LI"] = 35;
    $age["LII"] = 45;
    $age["LIII"] = 46;
    foreach ($age as $key => $val)
        {
    
?>
<p><?php print("Under Key ".$key. " we have the value : ".$val); ?></p>
<?php
    }
?>

<p><------------------------------------------------------------------------HAHA---------------------------------------------------------------------------></p>
<H1>19.10.2021</H1>

<?php
    $Cost = ["Dacia"=>10000,"APPLE"=>20000,"BMW"=>30000]; 
?>
<table>
    <tr><th>Car Manufa</th><th>Price</th></tr>

<?php
    foreach ($Cost as $key => $value) {
        
    
?>
<tr>
    <td><?=$key?></td>
    <td><?=$value?></td>
</tr>
<?php
    }
?>
</table>

<p><------------------------------------------------------------------------HAHA---------------------------------------------------------------------------></p>
<H1>21.10.2021</H1>


</body>
</html>