<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Products</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?= time(); ?>'>
    <style>
        form {
            position: relative;
            top: 100px;
        }
    </style>
</head>

<body>
    <?php
    include_once("../navbar.php");
    navbar(["Home", "About", "Contact", "Products", "Resister", "Login"], ["Home", "About", "Contact", "Products", "Resister", "Login"], "langEn", 5);

    ?>
    <form method="POST">
        <p>username:</p>
        <input name="UsersName">
        <p>password:</p>
        <input name="UsersPassword" type="Password">
        <button type="submit">login</button>
    </form>
    <?php
    if (isset($_POST["UsersName"], $_POST["UsersPassword"])) {
        $host = "localhost";
        $user = "root";

        $psw = "";

        $portNo = "3306";

        $database = "Shop";



        $connection = new mysqli($host, $user, $psw, $database, $portNo);

        $sqlInsert = $connection->prepare("SELECT username,userpassword FROM USERS where username=?");

        $sqlInsert->bind_param("s", $_POST["UsersName"]);

        $sqlInsert->execute();

        $result = $sqlInsert->get_result();

        $flaguserfound = false;

        if ($row = $result->fetch_assoc()) {

            if (password_verify($_POST["UsersPassword"], $row["userpassword"])) {

                print("welcome");

                $flaguserfound = true;

                $_SESSION["login"] = true;
            }
        }

        if ($flaguserfound == false)

            die("invalid username or password");
    }
    ?>

    </form>
</body>

</html>