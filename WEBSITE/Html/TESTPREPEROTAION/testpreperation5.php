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
    if (isset($_GET["number"])) {
        $number=$_GET["number"];
        $sum=0;
        for ($i=1; $i <= $number; $i++) { 
            $sum+=$i*($i+1);
            
            if ($i<$number) {
                print($i."*(".$i."+1)+");
            }else{
                print($i."*(".$i."+1)");
            }
        }
        print("=".$sum);
    }
    ?>
    <form method="GET">
    <input type="text" name="number">
    <input type="submit" name="">

    </form>
</body>
</html>