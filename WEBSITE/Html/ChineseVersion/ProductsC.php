<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>产品</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?= time(); ?>'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    include_once("../navbar.php");
    navbar(["首页","关于","联系","产品","注册","登录"],["Home","About","Contact","Products","Resister","Login"],"langCN",3);
    ?>
    <div class="box-area">

        <div class="banner-area">
            <h2>Pandora Box</h2>
        </div>
        <div class="content-area">
            <div>
                <h2>我们的产品</h2>
                <p>Lorem Ipsum，也称乱数假文或者哑元文本， 是印刷及排版领域所常用的虚拟文字。由于曾经一台匿名的打印机刻意打乱了一盒印刷字体从而造出一本字体样品书，Lorem Ipsum从西元15世纪起就被作为此领域的标准文本使用。它不仅延续了五个世纪，还通过了电子排版的挑战，其雏形却依然保存至今。在1960年代，”Leatraset”公司发布了印刷着Lorem Ipsum段落的纸张，从而广泛普及了它的使用。最近，计算机桌面出版软件”Aldus PageMaker”也通过同样的方式使Lorem Ipsum落入大众的视野。</p>
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
                            <a href="ShowdetailC.php?ProductId=<?= $piecesArray[5] ?>"><img src="../../Images/Products/<?= $piecesArray[0] ?>"></a>
                            <p><?= $piecesArray[2] ?></p>
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