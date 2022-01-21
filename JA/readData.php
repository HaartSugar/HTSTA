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
    if (isset($_GET["UserName"],$_GET["Password"])) 
    {
        print "Your user entered is: ".$_GET["UserName"];
        print "Your user Password is: ".$_GET["Password"];
    }
    else 
    {
        print ("<h1>GO TO HELL</h1>");    
    }
    
    
    ?>
</body>
</html>