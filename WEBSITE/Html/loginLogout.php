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
    session_start();
    if (!isset($_SESSION["UserLogged"])) {
        $_SESSION["UserLogged"] = false;
    }
    if (isset($_POST["Login"])) {
        print("clicked");
        $_SESSION["UserLogged"] = true;
    }
    if (isset($_POST["LogOut"])) {
        print("Out");
        $_SESSION["UserLogged"] = false;
    }
    if ($_SESSION["UserLogged"]) {

    ?>
        <form method="POST">
            <input type="submit" name="LogOut" value="GoOut">
        </form>
    <?php
    } else {

    ?>

        <form method="POST">
            <input type="submit" name="Login" value="GoIn">
        </form>

    <?php
    }
    ?>
</body>

</html>