<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $handle = fopen("testprepreration4.txt", "r") or die("File not found");

    while ($file = fgets($handle)) {
    $numberArray = explode(",",$file);
    $numberTogeter = $numberArray[0] + $numberArray[1];
    if ($numberTogeter <= 100) {
        print($numberArray[2]);
    }
    
    }
    ?>
</body>
</html>