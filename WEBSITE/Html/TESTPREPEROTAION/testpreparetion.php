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
    $maxPrice = 30;
    $handle = fopen("allP.txt", "r") or die("File not found");

    while (($line = fgets($handle)) !== false) {
        $piecesArray = explode("/", $line);
        $price = $piecesArray[3];
        $Final = str_replace("€", "", $price);
        if ($Final > $maxPrice) { ?>

            <p><?= $piecesArray[1] ?> - <?= $piecesArray[3] ?></p>

    <?php
        }
    }
    fclose($handle);
    ?>
</body>

</html>