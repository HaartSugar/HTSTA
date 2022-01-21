<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?= time(); ?>'>
    <title>Document</title>
</head>

<body>
    <?PHP
    include_once("../navbar.php");
    navbar(["Home", "About", "Contact", "Products","Resister","Login"], ["Home", "About", "Contact", "Products","Resister","Login"], "langEn", 3);


    if (isset($_GET["ProductId"])) {
        //print("We will display the product with ID " . $_GET["ProductId"]);
        $handle = fopen("../allP.txt", "r") or die("File not found");

        while (($line = fgets($handle)) !== false) {
            $piecesArray = explode("/", $line);
            if (count($piecesArray) == 7) {
                if ($piecesArray[4] == $_GET["ProductId"]) {



    ?>
    
                    <div class="Products">
                        <a href="Showdetail.php?ProductId=<?= $piecesArray[4] ?>"><img src="../../Images/Products/<?= $piecesArray[0] ?>"></a>
                        <p><?= $piecesArray[1] ?></p>
                        <p><?= $piecesArray[3] ?></p>

                    </div>
    <?php
                }
            }
        }
        fclose($handle);
    } else {
        print("No no. You are trying to visit an unknowk product Page");
    }
    ?>
</body>

</html>