<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            height: 70px;
            width: 70px;
        }
        .blue{
            background-color: blue;
        }
        .red{
            background-color: red;
        }
        .yellow{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <?php
    $filename=("textpreperation6.txt");
    if (file_exists($filename)) {
        $handle=fopen($filename,"r");
        while (($line=fgets($handle))) {
            $item = explode(",",$line);
            for ($i=1; $i < $item[0] ; $i++) { 
                print("<div class='box $item[1]'>$i</div> <br>");
            }
        }
    }
    ?>
</body>
</html>