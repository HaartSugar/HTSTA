<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <form>
        Numbre: <input name="myInput">
        <button id="mySubmit" >Submit</button>
    </form>



    <?php
    $count = 0;
    //$fileToRead = fopen("cars.txt","r");
    $handle = fopen("cars.txt", "r") or die("File not found");

    while (($line = fgets($handle)) !== false) {
        $piecesArray = explode(",", $line); 
        if (isset($_GET[])) {
            # code...
        }
    ?>
        <span>Product: <?= $count + 1 ?></span>
        <br>
        <span><?= $piecesArray[0] ?></span>
        <br>


    <?php
        $count++;
    }
    fclose($handle);
    ?>


</body>

</html>