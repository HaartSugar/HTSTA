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
    if (isset($_GET["User"])) {
        print("Welcome " . $_GET["User"]);
    } else {


    ?>
        <form>
            <p>Whats ur name </p> <input type="text" name="User">
            <input type="submit">

        </form>
    <?php } ?>
</body>

</html>