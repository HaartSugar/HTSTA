<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body class="ColorW">

    <div class="container ColorA ColorC">
        <h2 class="logo ColorA">CLASSCHAIRS</h2>
        <ul class="ColorD">
            <li class="ColorD"><a href="Homeeng.php" class="ColorD">Home</a></li>
            <li class="ColorD"><a href="Abouteng.php" class="ColorD">About</a></li>
            <li class="ColorD"><a href="Contacteng.php" class="ColorD">Contact</a></li>
            <li class="ColorD"><a href="Productseng.php" class='active' class="ColorD">Products</a></li>
        </ul>
        <ul>
            <li class="ColorD"><a href="signupeng.php" class="ColorD">sign up</a></li>
        </ul>
        <div class="dropdown ColorB ColorD">
            <button class="dropbtn ColorE ColorF">language</button>
            <div class="dropdown-content ColorE">
                <a href="ProductsRus.php?lang=rus" class="ColorL"><img src="RusFlag.jpg"></a>
                <a href="ProductsSrb.php?lang=srb" class="ColorL"><img src="SrbFlag.jpg"></a>
            </div>
        </div>
    </div>
    <p class="title ColorW ">Products page</p>

    <div class="row ColorA ColorB">
        <div class="column ColorW ColorC ColorE">
            <a href="Showproduct.php?ProductId=0&language=eng">
                <img src="chair1.jpg">
            </a>
            <div>
                Essentials-Racing Mesh back with built-in lumbar support Ergonomic Racing Chair </div>
            120$
        </div>
        <div class="column ColorW ColorC ColorE">
            <a href="Showproduct.php?ProductId=1&language=eng">
                <img src="chair2.jpg">
            </a>
            <div>
                AmazonBasics-Gaming-Chair Ergonomic Racing Chair </div>
            180$
        </div>
        <div class="column ColorW ColorC ColorE">
            <a href="Showproduct.php?ProductId=2&language=eng">
                <img src="chair3.jpg">
            </a>
            <div>
                HEALGEN-Footrest Steep Recline </div>
            100$
        </div>
    </div>
    <div class="row ColorA ColorB">
        <div class="column ColorW ColorC ColorE">
            <a href="Showproduct.php?ProductId=3&language=eng">
                <img src="chair4.jpg">
            </a>
            <div>
                Soogen-Backtest Created for comfort </div>
            200$
        </div>
        <div class="column ColorW ColorC ColorE">
            <a href="Showproduct.php?ProductId=4&language=eng">
                <img src="chair5.jpg">
            </a>
            <div>
                Polar-Aura Uparalleled confort </div>
            120$
        </div>

        <!--
   <div class="row ColorA ColorB">
      <div class="column ColorW ColorC ColorE">
         <a href="https://www.amazon.com/Essentials-Racing-Style-Leather-Gaming/dp/B01MEGHWKN/ref=sr_1_2?dchild=1&keywords=gaming+chairs&qid=1587297139&sr=8-2">
            <img src="chair1.jpg">
            </a>
            <div>
            Mesh back with built-in lumbar support Ergonomic Racing Chair: height adjustable pivot arms
            Adjustable headrest for maximum comfort, made with black nylon and a chrome base infinite back adjustment
            Executive style swivel chair perfect for office and desk
            </div>
            Price: 120$
      </div>           
   </div>
-->
</body>

</html>