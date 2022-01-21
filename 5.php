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

$cars2 = ["Toyota", "Dacia", "Nissan"];
var_dump($cars2);

print("<br>");

array_push($cars2, "Mazda", "BMW", "Tesla");
var_dump($cars2);

print("<br>");

array_pop($cars2);
array_pop($cars2);
var_dump($cars2);

print("<br>");

array_shift($cars2);
array_shift($cars2);
var_dump($cars2);

for ($i=1; $i < 1001; $i++) { 
    
}

?>  
</body>
</html>