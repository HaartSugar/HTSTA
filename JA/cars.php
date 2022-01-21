<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>

<tr>
    <th>Name</th>
    <th>Price</th>
</tr>



    <?php
    //$fileToRead = fopen("cars.txt","r");
    $handle = fopen("cars.txt", "r") or die("File not found");

    while (($line = fgets($handle)) !== false) {
        $piecesArray = explode(",",$line);
    ?>
        <tr>
            <td><?= $piecesArray[0] ?></td>
            <td><?= $piecesArray[1] ?></td>
            <td><img src="./images/<?= $piecesArray[2] ?>" height= "30px" width= "50px"></td>
        </tr>
    <?php


    }
    fclose($handle);
    ?>


</body>

</html>