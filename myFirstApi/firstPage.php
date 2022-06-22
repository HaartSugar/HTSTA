<?php
include_once("phpCommandCode.php");
?>
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
    print("YOU ARE SUER: " . $_SESSION["Username"] . " and you want to buy " . $_SESSION["itemToBuy"]);
    ?>

    please fill in username
    <form method="POST" action="Api.php">
        <input type="hidden" name="Sender" value="firstPage.php">
        <input type="text" name="Username">
        <input type="submit" value="Go">
    </form>
</body>

</html>