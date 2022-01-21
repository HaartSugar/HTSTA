<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .box{
            width: 100px;
            height: 100px;
        }
        .redLine{
            background-color: red;
        }
        .blueLine{
            background-color: blue;
        }
    </style>
</head>
<body>
    
        



    <?php
        $colorOfDiv = "redLine";
        $numberOfBoxes = 50;
        for ($i=0;$i<50;$i++)
        {
    ?>
        <!--<div class="box <?php print $colorOfDiv; ?>"></div>-->

        <div class="box <?= $colorOfDiv; ?>">This is box number:</div>

    <?php
        }
    ?>
</body>
</html>