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
    navbar(["Home", "About", "Contact", "Products", "Resister", "Login"], ["Home", "About", "Contact", "Products", "Resister", "Login"], "langEn", 4);

    ?>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1> User Sign Up</h1>
    <p>FILL UP!!</p>

    <?php
    if (isset($_POST["UsersName"], $_POST["UsersPassword"], $_POST["Password_confirm"])) {
        if ($_POST["UsersPassword"] != $_POST["Password_confirm"]) {
            print("something is wrong");
            die();
        }
        $host = "localhost";
        $user = "root";
        $psw = "";
        $portNo = "3306";
        $database = "Shop";

        $connection = new mysqli($host, $user, $psw, $database, $portNo);
        $sqlInsert = $connection->prepare("INSERT INTO USERS(userName,userpassword) Values(?,?)");
        $sqlInsert->bind_param("ss", $_POST["UsersName"], $userpass);
        $userpass = $_POST["UsersPassword"];
        $userpass = password_hash($userpass, PASSWORD_DEFAULT);

        if ($sqlInsert->execute()) {
            print("welcome");
        } else {
            print("user already exist");
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="UsersName">
        <input type="password" name="UsersPassword" >
        <input type="password" name="Password_confirm">
        <input type="submit">
    </form>

</body>

</html>