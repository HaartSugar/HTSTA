<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Products</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?= time(); ?>'>
</head>

<body>
    <?php
    include_once("../navbar.php");
    navbar(["Home","About","Contact","Products"],["Home","About","Contact","Products"],"langEn",3);
    ?>
    <div class="box-area">

        <div class="banner-area">
            <h2>Pandora Box</h2>
        </div>
        <div class="content-area">
            <div>
                <h2>Our Products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="allproducts">

                <?php
                //$fileToRead = fopen("cars.txt","r");
                $handle = fopen("../allP.txt", "r") or die("File not found");

                while (($line = fgets($handle)) !== false) {
                    $piecesArray = explode("/", $line);
                    if (count($piecesArray) == 7) {
                ?>
                        <div class="Products">
                            <a href="Showdetail.php?ProductId=<?= $piecesArray[4] ?>"><img src="../../Images/Products/<?= $piecesArray[0] ?>"></a>
                            <p><?= $piecesArray[1] ?></p>
                            <p><?= $piecesArray[3] ?></p>

                        </div>
                <?php
                    }
                }
                fclose($handle);
                ?>

            </div>

        </div>
    </div>
</body>

</html>