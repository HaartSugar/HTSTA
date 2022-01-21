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

    if (isset($_GET["imageName"], $_GET["count"])) {
        $file = fopen("history.txt", "a") or die("file not found");
        fwrite($file, $_GET["imageName"] . ";" . $_GET["count"] . "\n");
        for ($i = 0; $i < $_GET["count"]; $i++) {
    ?>
            <img src="<?= $_GET["imageName"] ?>" width="200px">
    <?php
        }
    }
    ?>

    <form>
        <select name="imageName">
            <option value="car.jpg">
                Car
            </option>
            <option value="cat.jpg">
                Cat
            </option>
            <option value="dog.jpg">
                Dog
            </option>
        </select>
        <input name="count">
        <input type="submit" value="Add">
    </form>




</body>

</html>