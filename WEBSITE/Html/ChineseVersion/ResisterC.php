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
    navbar(["首页","关于","联系","产品","注册","登录"], ["Home", "About", "Contact", "Products", "Resister","Login"], "langCN", 4);

    ?>
    <form method="post">
        <fieldset>
            <legend>注册</legend>
            <ul>
                <li>
                    <label>用户名:</label>
                    <input type="text" name="username">
                </li>
                <li>
                    <label>密码:</label>
                    <input type="password" name="password0">
                </li>
                <li>
                    <label>重复密码:</label>
                    <input type="password" name="password1">
                </li>
                <button type="submit" name="Register">
                注册
                </button>

            </ul>
        </fieldset>
        <?php
        if (isset($_POST["username"], $_POST["password0"])) {
            if ($_POST["password0"] != $_POST["password1"]) {
                print("Password isn't same");
                die();
            }
            $myfile = fopen("../data.txt", "r") or die("Unable to open the file!");
            while (($line = fgets($myfile)) !== false) {
                $userNameandPass = explode(" ", $line);
                //print($userNameandPass[0]);
                if ($_POST["username"] == $userNameandPass[0]) {
                    die("Invalid Username");
                }
            }
            fclose($myfile);
            $myfile = fopen("../data.txt", "a") or die("Unable to open the file!");

            fwrite($myfile, $_POST["username"] . " " . $_POST["password0"] . "\n");
            fclose($myfile);
        }
        ?>
    </form>

</body>

</html>