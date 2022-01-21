<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            height: 50px;
            width: 50px;
            
        }
        .red {
            background-color: red;
        }
        .blue {
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["box"])) {
        if (is_numeric($_GET["box"])) {


            for ($i = 0; $i < $_GET["box"]; $i++) {
    ?>
                <div class="box"></div>
                <br>
        <?php }
        } else {
            print ("not a number");
        }
    } else { ?>
        <form>
            <input name="box">
            <input type="submit">
        </form>
    <?php
    }
    ?>
</body>

</html>