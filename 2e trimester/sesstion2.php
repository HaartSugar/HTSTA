<?php
include_once("sesstion.php");
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
if ($_SESSION["userIsLoggedIn"]) {
    print("Welcome ".$_SESSION["user"]);
}
else {
    print("You are not logged in");
}
?>
</body>
</html>