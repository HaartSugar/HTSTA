<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>About</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?=time(); ?>'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    
    include_once("../navbar.php");
navbar(["Home","About","Contact","Products","Resister","Login"],["Home","About","Contact","Products","Resister","Login"],"langEn",1);
    ?>
    <div class="box-area">

        <div class="banner-area">
            <h2>Pandora Box</h2>
        </div>
        <div class="content-area">
            <div>
                <h2>About Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="teams">
                <div class="everyone">
                    <img src="../../Images/Contact/pepa1.png" alt="pepa1">
                    <p>Mike Ross</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                </div>
                <div class="everyone">
                    <img src="../../Images/Contact/pepa2.jpg" alt="pepa1">
                    <p>Mike Ross</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                </div>
                <div class="everyone">
                    <img src="../../Images/Contact/pepaalone.png" alt="pepa1">
                    <p>Mike Ross</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                </div>
                <div class="everyone">
                    <img src="../../Images/Contact/pepaalone.png" alt="pepa1">
                    <p>Mike Ross</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                </div>
                <div class="everyone">
                    <img src="../../Images/Contact/pepaalone.png" alt="pepa1">
                    <p>Mike Ross</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>