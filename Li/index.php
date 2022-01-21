<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>Liiiiiiiiiiii</p>
<br>
    <?php
    $data = [
        "1" => "Dacia",
        "2" => "Volvo",
        "3" => "BMW"
    ];
    ?>
    <select name="CARS">
        <?php
        foreach ($data as $key => $value) { ?>

            <option value="<?=$key;?>"> <?=$value;?> </option>
        <?php
        }
        ?>



    </select>
</body>
</html>