<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
    if(isset($_GET["ProductId"]))
    {
        print("We will display the product with ID ".$_GET["ProductId"]);
    }
    else{
        print("No no. You are trying to visit an unknowk product Page");
    }
    ?>
</body>
</html>