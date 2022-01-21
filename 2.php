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
<body>
    
    <h1>Li</h1>
    <a href="http://192.168.6.83:8031/1st.php">Next Melanie</a>
    <br>


    <?php
    print("hello from php");
    $space = " ";
    $FirstName = "enourmous";
    $LastName = "LIII";
    $fullname = $FirstName.$space.$LastName;
    $a = 2;
    $b = 3;
    print($fullname)
    ?>
    <h1>I AM HTML</h1>
    <?php
    print("oh i forgot my name");
    
    ?>
    <div ><?php     $a = 2;$b = 3;print($a + $b);
    
        ?>
    </div>
    <p>Hello from html</p>

    
    <?php   
    for ($i=0;$i <= 10;$i++) {
        #print("<div>this is a div</div>");
    
    ?>
    <div>this is number: <?php print($i)?>
    <img src="https://assets.weforum.org/global_future_council/image/responsive_medium_webp_q3E6GCHtnqLOXM4V8vNLt72w2rzrFF1NorTq-nCCOvY.webp"
    >
    <?php  
    }
#phpinfo();
    ?>
    
</body>
</html>