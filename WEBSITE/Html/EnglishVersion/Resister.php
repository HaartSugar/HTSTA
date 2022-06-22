<?php
include_once("../START.PHP");

?>

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
    navbar(["Home", "About", "Contact", "Products","shoppingCart", "Resister", "Login"], ["Home", "About", "Contact", "Products", "Resister","shoppingCart", "Login"], "langEn", 5);

    ?>
    <form method="post">
        <fieldset>
            <legend>Register</legend>
            <ul>
                <li>
                    <label>Username:</label>
                    <input type="text" name="username">
                </li>
                <li>
                    <label>Password</label>
                    <input type="password" name="password0">
                </li>
                <li>
                    <label>RedoPassword</label>
                    <input type="password" name="password1">
                </li>
                <button type="submit" name="Register">
                    Register
                </button>

            </ul>
        </fieldset>
        <?php
        if (isset($_POST["username"], $_POST["password0"], $_POST["password1"])) {
            if ($_POST["password0"] != $_POST["password1"]) {
                
                print "<script>alert('Password not the same')</script>";
                
                die();

            }
            $sqlStatement = $connection->prepare("SELECT * FROM Users where UserName=?");
            $sqlStatement->bind_param("s", $_POST["username"]);
            $sqlStatement->execute();
            $result = $sqlStatement->get_result();
            $userExist = $result->num_rows;

            if ($userExist == 0) {
                $hashPassword = password_hash($_POST["password0"], PASSWORD_DEFAULT);

                $sqlStatement2 = $connection->prepare("INSERT INTO Users(UserName,UserPassword) VALUES (?,?) ");
                $sqlStatement2->bind_param("ss", $_POST["username"], $hashPassword);
                $sqlStatement2->execute();
                $_SESSION['shoppingCart']=[];//Creat shoppingcart
                $_SESSION['userLoggedIn']=true;

                print "<script>alert('YOU ARE LOGIN')</script>";
                print '<script>window.location.href = "Home.php";</script>';
                die();
            }else {
                print "<script>alert('User are all exist')</script>";
            }
        }
        ?>
    </form>

</body>

</html>