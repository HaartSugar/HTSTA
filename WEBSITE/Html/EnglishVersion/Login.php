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
    navbar(["Home", "About", "Contact", "Products","shoppingCart", "Resister","Login"], ["Home", "About", "Contact", "Products","shoppingCart", "Resister","Login"], "langEn", 6);
    ?>
<form method="POST">
        <fieldset>
            <legend>Login</legend>
            <ul>
                <li>
                    <label>Username:</label>
                    <input type="text" name="username">
                </li>
                <li>
                    <label>Password</label>
                    <input type="password" name="password0">
                </li>
                
                <button type="submit" name="login">
                    Login
                </button>
            </ul>
        </fieldset>   
    </form>
    <?php
    if (isset($_POST['username'],$_POST['password0'])) {
        $sqlStatement = $connection->prepare("SELECT * FROM Users where UserName=?");
        $sqlStatement->bind_param("s", $_POST["username"]);
        $sqlStatement->execute();
        $result = $sqlStatement->get_result();
        $userExist = $result->num_rows;

        if ($userExist == 1) {
            $row=$result->fetch_assoc();
            if (password_verify($_POST['password0'],$row['UserPassword'])) {
                $_SESSION['UserName']=$row['UserName'];

                $_SESSION['admin']=($row['UserAdmin']==1);
                


                $_SESSION['shoppingCart']=[];//Creat shoppingcart
                $_SESSION['userLoggedIn']=true;

                print "<script>alert('YOU ARE LOGIN')</script>";
                print '<script>window.location.href = "Home.php";</script>';
                die();
            }else {
                print "<script>alert('Password does not match')</script>";
            }
        }else {
            print "<script>alert('User does not exist')</script>";
        }
    }
    ?>

</form>
</body>
</html>